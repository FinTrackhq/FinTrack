<?php

namespace App\Models;


use App\Models\Traits\HasCompanyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StuffDocument extends Model
{
    use HasFactory, SoftDeletes, HasCompanyTrait;

    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'passport_series',
		'passport_number',
		'passport_issued',
		'passport_date',
		'snils',
		'stuff_id',
		'company_id',
    ];

	public function stuff(): BelongsTo
	{
		return $this->belongsTo(CompanyStuff::class);
	}

}
