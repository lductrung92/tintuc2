<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $postId = $this->route()->parameter('id');
        return [
            'txtName' => 'required',
            'txtEmail' => 'required|email',
            'txtUsername' => 'required|unique:users,username,'.$postId,
            'txtPassword' => 'required',
            'txtPasswordAgain' => 'required|same:txtPassword'
        ];
    }

    public function messages() {
        return [
            'txtName.required' => 'Bạn chưa nhập họ tên',
            'txtEmail.required' => 'Bạn chưa nhập email',
            'txtEmail.email' => 'Email không hợp lệ',
            'txtUsername.required' => 'Bạn chưa nhập username',
            'txtUsername.unique' => 'Username đã tồn tại',
            'txtPassword.required' => 'Bạn chưa nhập password',
            'txtPasswordAgain.required' => 'Bạn chưa xác nhận lại password',
            'txtPasswordAgain.same' => 'Xác nhận password chưa khớp'
        ];
    }
}
