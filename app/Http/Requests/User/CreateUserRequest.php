<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
			'email' => ['required', 'email', 'string'],
			'password' => ['required', 'string'],
        ];
    }
}
