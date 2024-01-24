<?php

namespace App\Http\Resources\StuffDocument;

use Illuminate\Http\Resources\Json\JsonResource;

class StuffDocumentResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'passport_series' => $this->passport_series,
			'passport_number' => $this->passport_number,
			'passport_issued' => $this->passport_issued,
			'passport_date' => dateTimeFormat($this->passport_date),
			'snils' => $this->snils,
			'stuff_id' => $this->stuff_id,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
