<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilization extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_letter',
        'business_plan',
        'license_id',
    ];

    public function license()
    {
        return $this->belongsTo(Licenses::class);
    }
}
