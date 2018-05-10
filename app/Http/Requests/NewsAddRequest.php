<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsAddRequest extends FormRequest
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
           'hinh'=> 'image|mimes:png,jpg,jpeg|max:2028'
        ];
    }
    public function messages()
    {
        return [
            // 'hinh.image' => 'Định dạng không cho phép',
            'hinh.max' => 'Kích thước file quá lớn',
            'hinh.image'=>'hình ảnh không hợp lệ:png,jpg,jpeg'
        ];
    }
}
