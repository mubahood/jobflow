<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    function sub(){
        return $this->belongsTo(Location::class,'subcounty_id');
    }
}
