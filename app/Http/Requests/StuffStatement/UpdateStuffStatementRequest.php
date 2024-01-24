<?php

namespace App\Http\Requests\StuffStatement;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStuffStatementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'salary_10' => ['sometimes', 'integer'],
			'salary_25' => ['sometimes', 'integer'],
			'salary' => ['sometimes', 'integer'],
			'stuff_id' => ['sometimes'],
			'company_id' => ['sometimes'],
        ];
    }
}
