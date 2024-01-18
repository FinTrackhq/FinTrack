<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyPayment extends Model
{
    protected $fillable =[
        'payment_account',
        'bic',
        'corporate_account'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function companyExtract() : BelongsTo
    {
        return $this->belongsTo(CompanyExtract::class);
    }
    use HasFactory,SoftDeletes;
}
