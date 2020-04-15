<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    public function user(){
        return $this->hasMany(User::class);
    }
}
