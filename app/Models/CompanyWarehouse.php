<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyWarehouse extends Model
{
    protected $fillable =[
        'name',
        'quantity',
        'price'
    ];

    public function Company():BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    use HasFactory,SoftDeletes;
}
