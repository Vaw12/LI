<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use HasFactory;

    protected $fillable = [
        'research_permit',
        'research_proposal',
        'support_letter',
        'application_form',
        'research_clearance',
        'access_permit',
        'prior_consent',
        'instituitional_profile',
        'cv',
        'license_id',
    ];

    public function license()
    {
        return $this->belongsTo(Licenses::class);
    }
}
