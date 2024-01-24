<?php

namespace App\Http\Resources\CompanyPurchase;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyPurchaseResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
			'quantity' => $this->quantity,
			'price' => $this->price,
			'summary' => $this->summary,
			'warehouse_id' => $this->warehouse_id,
			'plan_account_id' => $this->plan_account_id,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
