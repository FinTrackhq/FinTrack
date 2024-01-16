<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
    use HasFactory, SoftDeletes;
}
