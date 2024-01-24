<?php

namespace App\Http\Requests\CompanySale;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanySaleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
			'quantity' => ['sometimes', 'integer'],
			'price' => ['sometimes', 'numeric'],
			'summary' => ['sometimes', 'numeric'],
			'warehouse_id' => ['sometimes'],
			'plan_account_id' => ['sometimes'],
			'company_id' => ['sometimes'],
        ];
    }
}
