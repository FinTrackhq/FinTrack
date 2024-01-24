<?php

namespace App\Http\Resources\CompanyExtract;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyExtractResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
			'coming' => $this->coming,
			'expenditure' => $this->expenditure,
			'payment_id' => $this->payment_id,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
