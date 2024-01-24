<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
			'short_name' => ['sometimes', 'string'],
			'type' => ['sometimes', 'string'],
			'user_id' => ['sometimes'],
        ];
    }
}
