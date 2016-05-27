<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table = 'usuario';

  protected $primaryKey = 'username';
  public $incrementing = false;

  protected $fillable = ['username','password','tipo_usuario'];

  public function ciudadano(){
    return $this->hasOne('App\Ciudadano', 'fk_user', 'username');
  }
}
