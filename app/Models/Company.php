<?php

namespace App\Models;

use App\Models\Traits\CompanyRelationsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected  $fillable = [
        'name',
        'short_name',
        'type',
        'user_id',
    ];

    use HasFactory, SoftDeletes, CompanyRelationsTrait;
}
