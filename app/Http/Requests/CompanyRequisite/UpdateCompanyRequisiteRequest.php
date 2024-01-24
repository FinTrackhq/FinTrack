<?php

namespace App\Http\Requests\CompanyRequisite;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequisiteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'inn' => ['sometimes', 'integer'],
			'kpp' => ['sometimes', 'integer'],
			'ogrn' => ['sometimes', 'integer'],
			'company_id' => ['sometimes'],
        ];
    }
}
