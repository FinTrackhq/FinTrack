<?php

namespace App\Http\Resources\CompanyWarehouse;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyWarehouseResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
			'quantity' => $this->quantity,
			'price' => $this->price,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
