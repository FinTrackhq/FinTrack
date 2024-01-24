<?php

namespace App\Http\Requests\StuffDocument;

use Illuminate\Foundation\Http\FormRequest;

class CreateStuffDocumentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'passport_series' => ['required', 'integer'],
			'passport_number' => ['required', 'integer'],
			'passport_issued' => ['required', 'string'],
			'passport_date' => ['required', 'date'],
			'snils' => ['required', 'integer'],
			'stuff_id' => ['required'],
			'company_id' => ['required'],
        ];
    }
}
