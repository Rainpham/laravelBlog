<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            'txtusername'=>'required|unique:users,username',
            'txtemail'=>'required|unique:users,email',
            'txtpassword'=>'required',
            'txtrepass'=>'same:txtpassword',
            'txtlever'=> 'required'
        ];
    }
    public function messages()
    {
        return [
            'txtusername.required' => 'Bạn vui lòng nhập username',
            'txtusername.unique'  => 'username đã tồn tại',
            'txtemail.required' => 'Bạn vui lòng nhập email',
            'txtemail.unique'  => 'email đã tồn tại',
            'txtpassword.required' => 'Bạn vui lòng nhập password',
            'txtrepass.same'=>'mật khẩu không trùng khớp',
            'txtlever.required' => 'Bạn vui lòng chọn lever'
        ];
    }
}
