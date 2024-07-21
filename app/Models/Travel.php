<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    public function traveler(){
        return $this->hasMany('App\Models\Traveler');
    }

    public function origin(){
        return $this->hasMany('App\Models\Origin');
    }

    public function destination(){
        return $this->hasMany('App\Models\Destination');
    }
}
