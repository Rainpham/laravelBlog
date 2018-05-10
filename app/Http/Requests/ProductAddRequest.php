<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name_company'  => 'required',
            'description'   => 'required',
            'detail'        => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name_company.required' => 'Bạn vui lòng nhập name_company',
            'description.required'  => 'Bạn vui lòng nhập description ',
            'detail.required'       => 'Bạn vui lòng nhập detail '
            
        ];
    }
}
