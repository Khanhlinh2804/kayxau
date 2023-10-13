<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:products|max:255|min:5',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'color' => 'required',
            'description' => 'required',
            'summary' => 'required|max:200'
        ];
    }

    public function message(): array
    {
        return[
            'name.required' => 'Product name is required.',
            'name.unique' => 'Product name already exists in the system.',
            'name.max' => 'Product name must not exceed 255 characters.',
            'name.min' => 'Product name must be at least 5 characters.',
            'images.required' => 'Product image is required.',
            'images.image' => 'Product image must be an image.',
            'images.mimes' => 'Invalid image format. Only jpeg, png, jpg, or gif are allowed.',
            'images.max' => 'Image size should not exceed 2MB.',
            'price.required' => 'Product price is required.',
            'price.numeric' => 'Product price must be a number.',
            'sale_price.required' => 'Sale price is required.',
            'sale_price.numeric' => 'Sale price must be a number.',
            'color.required' => 'Product color is required.',
            'description.required' => 'Product description is required.',
            'summary.required' => 'Product summary is required.',
            'summary.max' => 'Product summary must not exceed 200 characters.',
        ];
    }
}
