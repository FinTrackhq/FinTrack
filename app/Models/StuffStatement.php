<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StuffStatement extends Model
{
    protected $fillable = [
        'stuff_id',
        'salary_10',
        'salary_25',
        'salary'
    ];
    use HasFactory,SoftDeletes;
}
