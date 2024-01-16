<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected  $fillable = [
    'name',
    'short_name',
        'type',
        'tax_system',


    ];

    public function CompanyContact() : HasMany
    {
       return $this->hasMany(CompanyContact::class);
    }

    public function CompanyExtract() : HasMany
    {
        return  $this->hasMany(CompanyExtract::class);
    }
    use HasFactory, SoftDeletes;
}
