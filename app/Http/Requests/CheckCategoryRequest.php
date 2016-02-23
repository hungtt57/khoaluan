<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckCategoryRequest extends Request
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
            'name_category' => 'required|min:2',
        ];

    }
    public function messages(){
        return [
            'name_category.required' => 'Vui lòng nhập tên của category',
            'name_category.min' => 'Tên Catogory ít nhất là 2 ký tự',
        ];
    }
}
