<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StuffDocument extends Model
{
    protected $fillable =[
        'passport_series',
        'passport_number',
        'passport_issued',
        'passport_date',
        'snils'
    ];
    use HasFactory,SoftDeletes;
}
