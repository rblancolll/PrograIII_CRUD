<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_mercancia extends Model
{
    use HasFactory;

    public function mercancia(){

        $mercancia = mercancia::where('mercancia_id',$this->id)->first();
    }

}
