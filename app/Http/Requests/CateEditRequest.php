<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateEditRequest extends FormRequest
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
            'txtCategory'=>'required|unique:vp_category,name',//lỗi unique (tenbang,name)
            'cateRadio'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'txtCategory.required' => 'Bạn vui lòng nhập CATEGORY ',
            'txtCategory.unique'  => 'CATEGORY  đã tồn tại',
            'cateRadio.required' => 'Bạn vui lòng chọn danh mục CATEGORY '
        ];
    }
}
