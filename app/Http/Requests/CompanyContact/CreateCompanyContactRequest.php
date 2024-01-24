<?php

namespace App\Http\Requests\CompanyContact;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'address' => ['required', 'string'],
			'number' => ['required', 'integer'],
			'email' => ['required', 'email', 'string'],
			'company_id' => ['required'],
        ];
    }
}
