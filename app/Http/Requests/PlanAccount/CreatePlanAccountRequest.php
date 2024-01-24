<?php

namespace App\Http\Requests\PlanAccount;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanAccountRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'integer'],
			'company_id' => ['required'],
        ];
    }
}
