<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyRequisite extends Model
{
    protected $fillable = [
        'inn',
        'kpp',
        'ogrn'
    ];
    use HasFactory, SoftDeletes;
}
