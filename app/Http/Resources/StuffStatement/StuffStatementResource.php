<?php

namespace App\Http\Resources\StuffStatement;

use Illuminate\Http\Resources\Json\JsonResource;

class StuffStatementResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'salary_10' => $this->salary_10,
			'salary_25' => $this->salary_25,
			'salary' => $this->salary,
			'stuff_id' => $this->stuff_id,
			'company_id' => $this->company_id,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
