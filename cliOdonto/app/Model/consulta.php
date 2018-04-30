<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
  public function dentista(){
    return $this->hasMany(Dentista::class);
  }

  public function cliente(){
    return $this->hasMany(Cliente::class);
  }

}
