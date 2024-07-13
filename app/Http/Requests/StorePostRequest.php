<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        // db($this->all());
        return [
            'name' => "required",
            'email' => "required|email|confirmed|unique:users,email",
            'password' => "required|confirmed",
        ];
    }



    
        /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'email' => 'email address',
        ];
    }   





    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'name.required' => 'el nombre es requerido',
        'email.required' => 'el correo es requerido',
        'password.required' => 'la contraseña es requerida',
        'email.unique' => 'el correo es unico',
    ];
}
}
