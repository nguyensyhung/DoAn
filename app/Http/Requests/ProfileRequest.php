<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'first_name'        =>  'required',
            'last_name'         =>  'required',
            'phone'             =>  'required|numeric',
            'address'           =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'first_name.required'    =>  'Vui lòng nhập họ! ',
            'last_name.required'     =>  'Vui lòng nhập tên!',
            'phone.required'         =>  'Vui lòng nhập số điện thoại!',
            'phone.numeric'        =>  'Bạn nhập không phải số điện thoại!',
            'address.required'       =>  'Vui lòng nhập địa chỉ cụ thể!',

        ];
    }
}
