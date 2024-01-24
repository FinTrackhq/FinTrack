<?php

namespace App\Http\Requests\CompanyExtract;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyExtractRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
			'coming' => ['sometimes', 'string'],
			'expenditure' => ['sometimes', 'string'],
			'payment_id' => ['sometimes'],
			'company_id' => ['sometimes'],
        ];
    }
}
