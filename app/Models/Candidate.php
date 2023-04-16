<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    function sub()
    {
        return $this->belongsTo(Location::class, 'subcounty_id');
    }



    public function setCvSharedWithPartnersAttribute($pictures)
    {
        if (is_array($pictures)) {
            $this->attributes['cv_shared_with_partners'] = json_encode($pictures);
        }
    }

    public function getCvSharedWithPartnersAttribute($pictures)
    {
        return json_decode($pictures, true);
    }
}
