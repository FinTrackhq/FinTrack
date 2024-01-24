<?php

namespace App\Http\Requests\StuffStatement;

use Illuminate\Foundation\Http\FormRequest;

class CreateStuffStatementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'salary_10' => ['required', 'integer'],
			'salary_25' => ['required', 'integer'],
			'salary' => ['required', 'integer'],
			'stuff_id' => ['required'],
			'company_id' => ['required'],
        ];
    }
}
