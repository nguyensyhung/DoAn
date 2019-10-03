<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
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
            'nickname' => 'required',
            'title'    => 'required',
            'content'  => 'required|min:10',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nickname.required' => 'Vui lòng nhập biệt danh',
            'title.required'    => 'Vui lòng nhập tiêu đề',
            'content.required'  => 'Vui lòng nhập nội dung',
            'content.min'       => 'Vui lòng nhập ít nhất 10 ký tự',
        ];
    }
}
