<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
			'email' => ['sometimes', 'email', 'string'],
			'password' => ['sometimes', 'string'],
        ];
    }
}
