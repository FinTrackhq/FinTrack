<?php

namespace App\Http\Requests\CompanyRequisite;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequisiteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'inn' => ['required', 'integer'],
			'kpp' => ['required', 'integer'],
			'ogrn' => ['required', 'integer'],
			'company_id' => ['required'],
        ];
    }
}
