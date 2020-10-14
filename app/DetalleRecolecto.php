<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleRecolecto extends Model
{
    protected $table = 'detalle_recolector';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_punto_reciclaje','id_recolectores'];

    /*public function materia()
    {
        return $this->hasMany('App\Materia', 'idAlumno', 'id');
    }*/
}
