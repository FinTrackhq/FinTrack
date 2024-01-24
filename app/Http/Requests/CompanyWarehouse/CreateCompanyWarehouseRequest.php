<?php

namespace App\Http\Requests\CompanyWarehouse;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyWarehouseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
			'quantity' => ['required', 'integer'],
			'price' => ['required', 'integer'],
			'company_id' => ['required'],
        ];
    }
}
