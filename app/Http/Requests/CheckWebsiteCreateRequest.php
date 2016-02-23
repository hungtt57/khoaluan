<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckWebsiteCreateRequest extends Request
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
            'category_id' => 'required|exists:categories,id',
            'url' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'name_customer' => 'required|min:5|max:255',
            'address_customer' => '',
            'phone' => 'required|min:9'
        ];
    }

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'category_id.required' => 'Vui lòng chọn Category',
           
            'url.required' => 'Vui lồng nhập URL',
            'url.regex' => 'URL bạn nhập vào không hợp lệ',
            'name_customer.required' => 'Vui lòng nhập tên khách hàng',
            'name_customer.min' => 'Tên khách hàng tối thiểu 5 ký tự',
            'name_customer.max' => 'Tên khách hàng tối đa 255 ký tự',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.min' => 'Số điện thoại tối thiểu 9 ký tự',
        ];
    }
}
