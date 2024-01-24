<?php

namespace App\Http\Resources\CompanyRequisite;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyRequisiteResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'inn' => $this->inn,
			'kpp' => $this->kpp,
			'ogrn' => $this->ogrn,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
