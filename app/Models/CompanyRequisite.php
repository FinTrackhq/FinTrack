<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyRequisite extends Model
{
    use HasFactory, SoftDeletes;



    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'inn',
		'kpp',
		'ogrn',
		'company_id',
    ];

	public function company(): BelongsTo
	{
		return $this->belongsTo(Company::class);
	}

}
