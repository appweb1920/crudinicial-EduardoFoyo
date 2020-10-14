<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recolectores extends Model
{
    protected $table = 'recolectores';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nombre','dias_recoleccion'];
}
