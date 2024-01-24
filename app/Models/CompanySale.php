<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanySale extends Model
{
    use HasFactory, SoftDeletes;



    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'name',
		'quantity',
		'price',
		'summary',
		'warehouse_id',
		'plan_account_id',
		'company_id',
    ];

	public function warehouse(): BelongsTo
	{
		return $this->belongsTo(CompanyWarehouse::class);
	}

	public function planAccount(): BelongsTo
	{
		return $this->belongsTo(PlanAccount::class);
	}

	public function company(): BelongsTo
	{
		return $this->belongsTo(Company::class);
	}

}
