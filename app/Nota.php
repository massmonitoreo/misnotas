<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function radios() {
        return $this->belongsToMany(Radio::class);
    }
    public function tvs() {
        return $this->belongsToMany(Tv::class);
    }
}
