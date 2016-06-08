<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaRadio extends Model
{
    public function nota() {
        return $this->belongsTo(Nota::class);
    }
}