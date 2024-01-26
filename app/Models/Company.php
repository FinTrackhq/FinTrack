<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected  $fillable = [
        'name',
        'short_name',
        'type',
        'user_id',
    ];
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function companyExtracts() : HasMany
    {
        return $this->hasMany(CompanyExtract::class);
    }
    public function companyPayments(): HasMany
    {
        return $this->hasMany(CompanyPayment::class);
    }
    public function companyRequisites() : HasOne
    {
        return $this->hasOne(CompanyRequisite::class);
    }
    public function companyWarehouses(): HasOne
    {
        return $this->hasOne(CompanyWarehouse::class);
    }
    public function stuffDocuments(): HasMany
    {
        return $this->hasMany(StuffDocument::class);
    }

    public function companyContacts() : HasMany
    {
        return $this->hasMany(CompanyContact::class);
    }

    public function companyStuffs(): HasMany
    {
        return $this->hasMany(CompanyStuff::class);
    }

    public function stuffStatements(): HasMany
    {
        return $this->hasMany(StuffStatement::class);
    }

    public function companySales(): HasMany
    {
        return $this->hasMany(CompanySale::class);
    }
    public function companyPurchases(): HasMany
    {
        return $this->hasMany(CompanyPurchase::class);
    }
    use HasFactory, SoftDeletes;
}
