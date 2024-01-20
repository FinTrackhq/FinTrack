<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyPurchase extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'price',
        'summary',
        'account_name'
    ];
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    use HasFactory, SoftDeletes;
}
