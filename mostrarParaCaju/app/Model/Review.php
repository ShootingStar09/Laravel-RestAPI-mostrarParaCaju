<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\model\Produto;

class Review extends Model
{
    public function produto(){
      return $this->belongsTo(Produto::class);
    }
}
