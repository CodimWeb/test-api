<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone|regex:/^\+7\d{10}$/',
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'passwordConfirm' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите имя.',
            'email.email' => 'Некорректный email',
            'email.unique' => 'Данный email уже занят',
            'phone.unique' => 'Данный телефон уже занят',
            'password.min' => 'Пароль должен быть не менее 6 символов',
            'password.regex' => 'Парль должен содержать цифры буквы в нижнем и верхнем регистре, а так же спецсимволы @$!%*#?&'
        ];
    }
}
