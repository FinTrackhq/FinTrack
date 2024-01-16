<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanAccount extends Model
{
    protected $fillable =
        [
        'id',
        'name'
        ];
    use HasFactory, SoftDeletes;
}
