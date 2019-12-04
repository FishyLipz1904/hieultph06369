<?php

namespace App\Http\Requests\Comment;

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
            'content' => 'required|min:5|max:255',
        ];
    }
    public function messages()
    {
        return [
            'content.required' => 'Yêu cầu phải có nội dung',
            'content.min' => 'Nội dung phải lớn hơn 5 kí tự',
            'content.max' => 'Nội dung phải nhỏ hơn 255 kí tự',
        ];
    }
}
