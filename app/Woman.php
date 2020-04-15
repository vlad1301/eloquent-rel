<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Woman extends Model
{
    public function cars(){
        return $this->morphOne(Car::class, 'buyer');
    }
}
