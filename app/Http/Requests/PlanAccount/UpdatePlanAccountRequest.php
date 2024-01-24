<?php

namespace App\Http\Requests\PlanAccount;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanAccountRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'integer'],
			'company_id' => ['sometimes'],
        ];
    }
}
