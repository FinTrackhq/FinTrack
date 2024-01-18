<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyContact extends Model
{
    protected $fillable =
        [
            'address',
            'phone',
            'email'

        ];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    use HasFactory, SoftDeletes;
}
