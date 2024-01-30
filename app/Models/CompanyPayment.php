<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyPayment extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'account',
		'bic',
		'company_id',
    ];
    public function companyExtract() : HasOne
    {
        return $this->hasOne(CompanyExtract::class);
    }
	public function company(): BelongsTo
	{
		return $this->belongsTo(Company::class);
	}


    use HasFactory,SoftDeletes;
}
