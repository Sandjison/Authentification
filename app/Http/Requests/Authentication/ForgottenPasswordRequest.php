<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgottenPasswordRequest extends FormRequest
{


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Change this if you need to check user permissions
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|min:3|max:128|email',
        ];
    }

    /**
     * Get the custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.email' => 'L\'adresse e-mail est invalide.',
            'email.required' => 'L\'adresse e-mail est requise.',
            'email.min' => 'L\'e-mail doit contenir au minimum 3 caractères.',
            'email.max' => 'L\'e-mail doit contenir au maximum 128 caractères.',
        ];
    }
}
