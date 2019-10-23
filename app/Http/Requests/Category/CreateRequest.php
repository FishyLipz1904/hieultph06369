<?php

namespace App\Http\Requests\Category;

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
            'name' => 'required|unique:categories,name|min:6',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Tên không được rỗng",
            'name.unique' => "Tên không được trùng với các category khác",
            'name.min' => "Tên phải lớn hơn 6 kí tự",
        ];
    }
}
