<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StuffStatement extends Model
{
    use HasFactory, SoftDeletes;



    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'salary_10',
		'salary_25',
		'salary',
		'stuff_id',
		'company_id',
    ];

	public function stuff(): BelongsTo
	{
		return $this->belongsTo(CompanyStuff::class);
	}

	public function company(): BelongsTo
	{
		return $this->belongsTo(Company::class);
	}

}
