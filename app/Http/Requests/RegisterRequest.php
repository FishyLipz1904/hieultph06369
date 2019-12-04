<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:3|max:50|unique:users,name',
            'email' => 'email|required|unique:users,email',
            'phone_number' => 'required',
            'birthday' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6|required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Tên không được rỗng",
            'name.min' => "Tên phải lớn hơn 3 kí tự",
            'name.max' => "Tên phải nhỏ hơn 50 kí tự",
            'name.unique' => "Tên không được trùng với tên user khác",
            'email.email' => "Email phải nhập đúng định dạng",
            'email.required' => "Email không được rỗng",
            'email.unique' => "Email không được trùng với email khác",
            'phone_number.required' => "Số điện thoại không được rỗng",
            'birthday.required' => "Ngày sinh không được rỗng",
            'password.required_with' => "Password phải nhập cùng confirm",
            'password.same' => "Password phải khớp với confirm",
            'password.min' => "Password phải lớn hơn 6 kí tự",
            'password_confirmation.min' => "Confirm password phải lớn hơn 6 kí tự",
            'password_confirmation.required' => "Confirm password không được rỗng",
            
        ];
    }
}
