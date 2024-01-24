<?php

namespace App\Http\Requests\CompanyContact;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'address' => ['sometimes', 'string'],
			'number' => ['sometimes', 'integer'],
			'email' => ['sometimes', 'email', 'string'],
			'company_id' => ['sometimes'],
        ];
    }
}
