<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function pass()
    {
    	return $this->belongsToMany(Pass::class);
    }
}
