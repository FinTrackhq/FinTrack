<?php

namespace App\Http\Requests\CompanyStuff;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyStuffRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'full_name' => ['sometimes', 'string'],
			'birthday' => ['sometimes', 'date'],
			'phone' => ['sometimes', 'integer'],
			'email' => ['sometimes', 'email', 'string'],
			'post' => ['sometimes', 'string'],
			'company_id' => ['sometimes'],
        ];
    }
}
