<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function notaradio() {
        return $this->hasOne(NotaRadio::class);
    }
}
