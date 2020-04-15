<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Man extends Model
{
    public function cars(){
        return $this->morphMany(Car::class, 'buyer');
    }
}
