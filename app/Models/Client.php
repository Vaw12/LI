<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'gender',
        'client_type',
        'national_id',
        'physical_address',
        'email_address',
        'org_number',
        'user_id',
    ];

    public function licenses(){
        return $this->hasMany(Licenses::class);
    }
}
