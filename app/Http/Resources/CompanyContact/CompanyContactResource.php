<?php

namespace App\Http\Resources\CompanyContact;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyContactResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'address' => $this->address,
			'number' => $this->number,
			'email' => $this->email,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
