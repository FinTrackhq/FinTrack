<?php

namespace App\Http\Requests\CompanyPayment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyPaymentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'account' => ['sometimes', 'integer'],
			'bic' => ['sometimes', 'integer'],
			'company_id' => ['sometimes'],
        ];
    }
}
