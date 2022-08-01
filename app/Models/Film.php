<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_permit',
        'synopsis',
        'license_id',
    ];

    public function license()
    {
        return $this->belongsTo(Licenses::class);
    }
}
