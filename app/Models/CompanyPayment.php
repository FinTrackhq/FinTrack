<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyPayment extends Model
{
    protected $fillable =[
        'payment_account',
        'bic',
        'corporate_account'
    ];

    use HasFactory,SoftDeletes;
}
