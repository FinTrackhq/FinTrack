<?php

namespace App\Http\Resources\PlanAccount;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanAccountResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
