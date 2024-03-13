<?php

namespace App\Models\Traits;

use App\Models\CompanyContact;
use App\Models\CompanyExtract;
use App\Models\CompanyPayment;
use App\Models\CompanyPurchase;
use App\Models\CompanyRequisite;
use App\Models\CompanySale;
use App\Models\CompanyStuff;
use App\Models\CompanyWarehouse;
use App\Models\StuffDocument;
use App\Models\StuffStatement;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method belongsToMany(string $class)
 * @method hasMany(string $class)
 * @method hasOne(string $class)
 */
trait CompanyRelationsTrait
{
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
    public function getNameAttribute($value): string
    {
        return trim($value);
    }
    public function getShortNameAttribute($value): string
    {
        return trim($value);
    }
}
