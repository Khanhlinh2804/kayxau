<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|min:5',
            'email' => 'required|unique:users|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'required|regex:/^0[0-9]{9}$/',
            'password' => 'required|max:30|min:8',
        ];
    }
}
