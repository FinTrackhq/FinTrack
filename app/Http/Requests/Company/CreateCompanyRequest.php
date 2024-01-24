<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
			'short_name' => ['required', 'string'],
			'type' => ['required', 'string'],
			'user_id' => ['required'],
        ];
    }
}
