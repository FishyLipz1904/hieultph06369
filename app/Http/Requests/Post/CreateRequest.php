<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
        return [
            'title' => 'required|min:6|max:50',
            'content' => 'required|min:6|max:255',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=> 'Vui lòng nhập tên bài viết',
            'title.min' => 'Tên phải lớn hơn 6 kí tự',
            'title.max' => 'Tên phải nhỏ hơn 6 kí tự',
            'content.required'=> 'Vui lòng nhập nội dung bài viết',
            'content.min' => 'Nội dung phải lớn hơn 6 kí tự',
            'content.max' => 'Nội dung phải nhỏ hơn 6 kí tự',
        ];
    }
}
