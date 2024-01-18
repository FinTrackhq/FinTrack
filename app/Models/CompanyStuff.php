<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyStuff extends Model
{
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'birthday',
        'post'
    ];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function stuffDocuments(): HasOne
    {
        return $this->hasOne(StuffDocument::class);
    }
    use HasFactory, SoftDeletes;
}
