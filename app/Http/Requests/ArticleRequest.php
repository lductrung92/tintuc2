<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'txtTitle' => 'required|unique:articles,title,'.$postId,
            'txtTag' => 'required',
            'txtDescription' => 'required',
            'txtContent' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'txtTitle.required' => 'Bạn chưa nhập tiêu đề bài viết',
            'txtTitle.unique' => 'Tiêu đề bài viết đã tồn tại',
            'txtDescription.required' => 'Bạn chưa nhập mô tả',
            'txtTag.required' => 'Bạn chưa nhập tag',
            'txtContent.required' => 'Bạn chưa nhập nội dung'
        ];
    }
}
