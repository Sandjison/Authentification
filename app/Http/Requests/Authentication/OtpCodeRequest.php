<?php

namespace App\Http\Requests;


// use App\Http\Requests\Authentication\OtpCodeRequest;
use Illuminate\Foundation\Http\FormRequest;

// class OtpCodeRequest extends FormRequest
//{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//     public function authorize()
//     {
//         return true; // Adjust as needed to check user permissions
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array
//      */
//     public function rules()
//     {
//         return [
//             'email' => 'required|min:3|max:128|email',
//             'code' => 'required|min:4|max:6',
//         ];
//     }

//     /**
//      * Get the custom messages for validator errors.
//      *
//      * @return array
//      */
//     public function messages()
//     {
//         return [
//             'email.email' => 'L\'adresse e-mail est invalide.',
//             'email.required' => 'L\'adresse e-mail est requise.',
//             'email.min' => 'L\'e-mail doit contenir au minimum 3 caractères.',
//             'email.max' => 'L\'e-mail doit contenir au maximum 128 caractères.',
//             'code.required' => 'Le code de confirmation est requis.',
//             'code.min' => 'Le code doit contenir au minimum 4 caractères.',
//             'code.max' => 'Le code doit contenir au maximum 6 caractères.',
//         ];
//     }
// }
