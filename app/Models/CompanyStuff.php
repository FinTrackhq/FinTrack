<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyStuff extends Model
{
    use HasFactory, SoftDeletes;



    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
		'birthday',
		'phone',
		'email',
		'post',
		'company_id',
    ];

	public function company(): BelongsTo
	{
		return $this->belongsTo(\App\Models\Company::class);
	}

    public function stuffDocuments(): HasOne
    {
        return $this->hasOne(StuffDocument::class);
    }
    use HasFactory, SoftDeletes;

    public function stuffStatements(): HasMany
    {
        return $this->hasMany(StuffStatement::class);
    }
}
