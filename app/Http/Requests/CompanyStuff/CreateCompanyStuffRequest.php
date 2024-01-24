<?php

namespace App\Http\Requests\CompanyStuff;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyStuffRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string'],
			'birthday' => ['required', 'date'],
			'phone' => ['required', 'integer'],
			'email' => ['required', 'email', 'string'],
			'post' => ['required', 'string'],
			'company_id' => ['required'],
        ];
    }
}
