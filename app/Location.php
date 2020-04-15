<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function venues(){
        return $this->hasOne(Venue::class);
    }
}
