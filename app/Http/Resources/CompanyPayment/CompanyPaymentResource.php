<?php

namespace App\Http\Resources\CompanyPayment;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyPaymentResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'account' => $this->account,
			'bic' => $this->bic,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
