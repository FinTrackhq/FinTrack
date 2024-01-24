<?php

namespace App\Http\Requests\CompanyPayment;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyPaymentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'account' => ['required', 'integer'],
			'bic' => ['required', 'integer'],
			'company_id' => ['required'],
        ];
    }
}
