<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    public $table='mercancias';
    use HasFactory;
    public function tipo(){

        return $this->belongsTo('App\Models\Tipo_mercancia');
}
}
