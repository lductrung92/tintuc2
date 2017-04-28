<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function getList(){
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }
    public function getInsert(){
        $categories = Category::all();
        return view('admin.category.insert', compact('categories'));
    }
    public function postInsert(CateRequest $request){
        $cate =  new Category();
        $cate->name = $request->txtName;
        $cate->parent_id = $request->selCategory;
        $cate->description = $request->txtDescription;
        $cate->alias = changeTitle($request->txtName);
        $cate->status = empty($request->txtStatus) ? 0 : 1;
        $cate->save();
        return redirect('administrator/category/list')->with(['success' => 'Thêm thành công']);
    }
    public function getUpdate($id){
        $cate = Category::find($id);
        $categories = Category::all();
        return view('admin.category.update', compact('cate', 'categories'));
    }
    public function postUpdate(CateRequest $request, $id){
        $cate = Category::find($id);
        $cate->name = $request->txtName;
        $cate->parent_id = $request->selCategory;
        $cate->description = $request->txtDescription;
        $cate->alias = changeTitle($request->txtName);
        $cate->status = empty($request->txtStatus) ? 0 : 1;
        $cate->update();
        return redirect('administrator/category/list')->with(['success' => 'Cập nhật thành công']);
    }
    public function getDelete($id){
        $cate = Category::find($id);
        $cate->delete();
        return redirect('administrator/category/list')->with(['success' => 'Xóa thành công']);
    }
}
