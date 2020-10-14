<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntoReciclaje extends Model
{
    protected $table = 'punto_reciclaje';
    protected $primaryKey = 'id';
    protected $fillable = ['id','tipo','direccion','hora_apertura','hora_cierre'];
}
