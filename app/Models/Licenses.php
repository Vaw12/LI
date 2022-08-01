<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_name',
        'fee_paid',
        'approval',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function films()
    {
        return $this->hasMany(Film::class);
    }

    public function exports()
    {
        return $this->hasMany(Export::class);
    }
    
    public function utilizations()
    {
        return $this->hasMany(Utilization::class);
    }


}
