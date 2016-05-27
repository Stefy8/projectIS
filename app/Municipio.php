<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
  protected $table = 'municipio';

  protected $primaryKey = 'id_mcpio';
  public $incrementing = true;

  protected $fillable = ['nom_mcpio','ubicacion_mcpio','fk_id_dpto'];
  
}
