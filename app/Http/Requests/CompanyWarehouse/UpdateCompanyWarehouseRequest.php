<?php

namespace App\Http\Requests\CompanyWarehouse;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyWarehouseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
			'quantity' => ['sometimes', 'integer'],
			'price' => ['sometimes', 'integer'],
			'company_id' => ['sometimes'],
        ];
    }
}
