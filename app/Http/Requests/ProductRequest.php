<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'           => 'required',
            'name_image'     => 'required',
            'description'    => 'required',
            'content'        => 'required',
            'status'         => 'required',
            'price'          => 'required|numeric',
            'category_id'    => 'required',
            'images'         => 'required|array',
            'images.*'       => 'image',
            'product_attributes' => 'required',
            'product_attributes.*.color_id' => 'required|numeric',
            'product_attributes.*.size_id' => 'required|numeric',
            'product_attributes.*.quantity' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required'           => 'Tên sản phẩm không được để trống!',
            'name_image.required'     => 'Tên hình ảnh không được để trống!',
            'description.required'    => 'Mô tả sản phẩm không được để trống!',
            'content.required'        => 'Nội dung sản phẩm không được để trống!',
            'status.required'         => 'Trạng thái sản phẩm không được để trống!',
            'price.required'          => 'Giá không được để trống!',
            'price.numeric'           => 'Giá phải là một số!',
            'category_id.required'    => 'Danh mục không được để trống!',
            'images.required'         => 'Hình ảnh không được để trống!',
            'images.image'            => 'Không phải là hình ảnh!',

        ];
    }
}
