<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerAddRequest extends FormRequest
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
            'name_company' => 'required',
            'infomation'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name_company.required' => 'Bạn vui lòng nhập Name Partner ',
            'infomation.required'  =>  'Bạn vui lòng nhập Infomation'
        ];
    }
}
