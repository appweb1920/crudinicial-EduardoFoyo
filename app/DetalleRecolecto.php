<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleRecolecto extends Model
{
    protected $table = 'detalle_recolecto';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_punto_reciclaje','id_recolectores'];

    public function recolector()
    {
        return $this->hasMany('App\Recolectores', 'id', 'id_recolectores');
    }
    public function punto()
    {
        return $this->hasMany('App\PuntoReciclaje', 'id', 'id_punto_reciclaje');
    }
}
