<?php

namespace App\Models;


use App\Models\Traits\HasCompanyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyPurchase extends Model
{
    use HasFactory, SoftDeletes, HasCompanyTrait;

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

}
