<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class ArticleController extends Controller
{
    public function getList(){
        $articles = Article::all();
        return view('admin.article.list', compact('articles'));
    }
    public function getInsert(){
        $categories = Category::all();
        return view('admin.article.insert', compact('categories'));
    }
    public function postInsert(ArticleRequest $request){
        $article =  new Article();
        $article->title = $request->txtTitle;
        $article->category_id = $request->selCategory;
        $article->tag = $request->txtTag;
        $article->description = $request->txtDescription;
        $article->content = $request->txtContent;
        $article->alias = changeTitle($request->txtTitle);
        if($request->hasFile('fImage'))
        {
            $article->image = moveFile($request, 'fImage', false, null);

        }else{
            $article->image = "";
        }
        $article->status = empty($request->txtStatus) ? 0 : 1;
        $article->save();
        return redirect('administrator/article/list')->with(['success' => 'Thêm thành công']);
    }
    public function getUpdate($id){
        $art = Article::find($id);
        $categories = Category::all();
        return view('admin.article.update', compact('art', 'categories'));
    }
    public function postUpdate(ArticleRequest $request, $id){
        $article = Article::find($id);
        $article->title = $request->txtTitle;
        $article->category_id = $request->selCategory;
        $article->tag = $request->txtTag;
        $article->description = $request->txtDescription;
        $article->content = $request->txtContent;
        $article->alias = changeTitle($request->txtTitle);
        if($request->hasFile('fImage'))
        {
            if($article->image != '')
            {
                $article->image = moveFile($request, 'fImage', true, $article->image);
            }
            else
            {
                $article->image = moveFile($request, 'fImage', false, null);
            }
        }else{
            $article->image = $article->image;
        }
        $article->status = empty($request->txtStatus) ? 0 : 1;
        $article->update();
        return redirect('administrator/article/list')->with(['success' => 'Cập nhật thành công']);
    }
    public function getDelete($id){
        $article = Article::find($id);
        $article->delete();
        if($article->image != '')
        {
            unlink("upload/news/" . $article->image);
        }
        return redirect('administrator/category/list')->with(['success' => 'Xóa thành công']);
    }
}
