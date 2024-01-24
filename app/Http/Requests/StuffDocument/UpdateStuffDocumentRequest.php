<?php

namespace App\Http\Requests\StuffDocument;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStuffDocumentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'passport_series' => ['sometimes', 'integer'],
			'passport_number' => ['sometimes', 'integer'],
			'passport_issued' => ['sometimes', 'string'],
			'passport_date' => ['sometimes', 'date'],
			'snils' => ['sometimes', 'integer'],
			'stuff_id' => ['sometimes'],
			'company_id' => ['sometimes'],
        ];
    }
}
