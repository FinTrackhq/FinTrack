<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyExtract extends Model
{
    protected $fillable = [
        'name',
      'coming',
      'expenditure',
        'payment_id'

    ];

    use HasFactory,SoftDeletes;
}
