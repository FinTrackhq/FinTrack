<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StuffDocument extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'passport_series',
        'passport_number',
        'passport_issued',
        'passport_date',
        'snils',
    ];

    public function stuff(): BelongsTo
    {
        return $this->belongsTo(CompanyStuff::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}