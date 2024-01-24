<?php

namespace App\Http\Requests\CompanyPurchase;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyPurchaseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
			'quantity' => ['required', 'integer'],
			'price' => ['required', 'numeric'],
			'summary' => ['required', 'numeric'],
			'warehouse_id' => ['required'],
			'plan_account_id' => ['required'],
			'company_id' => ['required'],
        ];
    }
}
