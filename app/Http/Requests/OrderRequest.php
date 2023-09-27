<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class OrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cvv' => [
                'required',
                'max:255',
            ],
            'number' => [
                'required',
                'max:255',
            ],
            'date' => [
                'required',
            ],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw ValidationException::withMessages($validator->getMessageBag()->getMessages());
    }
}
