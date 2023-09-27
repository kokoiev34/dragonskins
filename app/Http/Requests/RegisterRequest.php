<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'max:255',
            ],
            'password' => [
                'required',
                'confirmed',
                'min:6',
                'max:255',
            ],
            'email' => [
                'required',
                'email:strict',
                'max:255',
            ],
            'age' => [
                'required',
            ],
            'news' => [
                'required',
            ]
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw ValidationException::withMessages($validator->getMessageBag()->getMessages());
    }
}
