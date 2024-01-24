<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyExtract extends Model
{
    use HasFactory, SoftDeletes;



    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'name',
		'coming',
		'expenditure',
		'payment_id',
		'company_id',
    ];

	public function companyPayment() : HasOne
	{
		return $this->HasOne(CompanyPayment::class);
	}

	public function company(): BelongsTo
	{
		return $this->belongsTo(Company::class);
	}

}
