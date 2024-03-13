<?php

namespace App\Models;


use App\Models\Traits\HasCompanyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyContact extends Model
{
    use HasFactory, SoftDeletes, HasCompanyTrait;
    /**
     * Mass-assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'address',
		'number',
		'email',
		'company_id',
    ];
}
