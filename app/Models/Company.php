<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected  $fillable = [
        'user_id',
        'name',
        'short_name',
        'type',
    ];
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    use HasFactory, SoftDeletes;
}
