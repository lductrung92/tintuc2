<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getList(){
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }
    public function getInsert(){
        return view('admin.user.insert');
    }
    public function postInsert(UserRequest $request){
        $user =  new User();
        $user->name = $request->txtName;
        $user->email = $request->txtEmail;
        $user->username = $request->txtUsername;
        $user->password = bcrypt($request->txtPassword);
        $user->save();
        return redirect('administrator/user/list')->with(['success' => 'Thêm thành công']);
    }
    public function getUpdate($id){
        $user = User::find($id);
        return view('admin.user.update', compact('user'));
    }
    public function postUpdate(UserRequest $request, $id){
        $user = User::find($id);
        $user->name = $request->txtName;
        $user->email = $request->txtEmail;
        $user->username = $request->txtUsername;
        $user->password = bcrypt($request->txtPassword);
        $user->save();
        return redirect('administrator/user/list')->with(['success' => 'Cập nhật thành công']);
    }
    public function getDelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('administrator/user/list')->with(['success' => 'Xóa thành công']);
    }
}
