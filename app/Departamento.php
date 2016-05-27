<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';

    protected $primaryKey = 'id_dpto';
    public $incrementing = true;

    protected $fillable = ['nom_dpto','ubicacion_dpto'];

    public function municipio(){
      return $this->hasMany('App\Municipio', 'fk_id_dpto', 'id_dpto');
    }
}
