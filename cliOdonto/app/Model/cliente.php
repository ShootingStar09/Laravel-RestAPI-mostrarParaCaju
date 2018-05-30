<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
  public function consultas(){
    return $this->hasMany(consulta::class);
  }

  public function dentistas(){
    return $this->hasMany(Dentista::class);
  }

  public function cliente(){
       return $this->morphMany('App\User', 'userable');
  }
}
