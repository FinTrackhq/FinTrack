<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
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

    public function CompanyPayment() : HasMany
    {
        return $this->hasMany(CompanyPayment::class);
    }

    public function CompanyRequisite() : HasOne
    {
        return  $this->hasOne(CompanyRequisite::class);
    }

    public function CompanyWarehouse() : HasOne
    {
        return $this->hasOne(CompanyWarehouse::class);
    }

    public function CompanyStuff() : HasMany
    {
        return $this->hasMany(CompanyStuff::class);
    }


    use HasFactory, SoftDeletes;
}
