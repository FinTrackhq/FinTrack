<?php

namespace App\Http\Requests\CompanyExtract;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyExtractRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
			'coming' => ['required', 'string'],
			'expenditure' => ['required', 'string'],
			'payment_id' => ['required'],
			'company_id' => ['required'],
        ];
    }
}
