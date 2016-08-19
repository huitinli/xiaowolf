<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Userrequest extends Request
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
            'username' => 'required',
            'password' => 'required',
            'repassword' => 'required|same:password',
            'email'=> 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '用户名不能为空',
            'password.required' => '密码不能为空',
            'repassword.required' => '确认不能为空',
            'repassword.same' => '两次密码不一致',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确'

        ];
    }
}
