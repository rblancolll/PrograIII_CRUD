<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_mercancia extends Model
{
    use HasFactory;

    public function mercancia (){

        return $this->hasOne('App\Models\mercancia');
    }

}
