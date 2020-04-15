<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function buyer(){
        return $this->morphTo();
    }

}
