<?php

namespace App\Models\Traits;

/**
 * Class HasCompanyTrait
 *
 * @package App
 */
use App\Models\Company;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method belongsTo(string $class)
 */
trait HasCompanyTrait
{
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
