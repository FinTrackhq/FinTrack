<?php

namespace App\Models;


use App\Models\Traits\HasCompanyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyExtract extends Model
{
    use HasFactory, SoftDeletes, HasCompanyTrait;

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
    public function payment() : BelongsTo
    {
        return $this->belongsTo(CompanyPayment::class);
    }
}
