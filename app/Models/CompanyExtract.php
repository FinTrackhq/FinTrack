<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyExtract extends Model
{
    protected $fillable = [
        'name',
      'coming',
      'expenditure',
        'payment_id'

    ];

    public function company():BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    public function companyPayment() : HasOne
    {
        return $this->hasOne(CompanyPayment::class);
    }
    use HasFactory,SoftDeletes;
}
