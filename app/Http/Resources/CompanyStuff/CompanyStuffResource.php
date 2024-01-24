<?php

namespace App\Http\Resources\CompanyStuff;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyStuffResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'full_name' => $this->full_name,
			'birthday' => dateTimeFormat($this->birthday),
			'phone' => $this->phone,
			'email' => $this->email,
			'post' => $this->post,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
