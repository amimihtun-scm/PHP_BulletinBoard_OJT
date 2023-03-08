<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email:rfc,dns|max:50|exists:users,email',
            // 'password' => 'required|min:6|max:20|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/|exists:users,password',
            'password' => 'required|min:6|max:20',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email cannot be blank.',
            'email.exists' => 'Email does not exist.',
            'email.email' => 'Email format is invalid.',
            'password.required' => 'Password cannot be blank.',
            'password.regex' => 'Password is weak.',
        ];
    }
}
