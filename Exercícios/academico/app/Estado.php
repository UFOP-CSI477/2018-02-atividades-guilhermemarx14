<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [ 'nome', 'sigla' ];
    //protected $guarded nao pode ser preenchido de maneira massiva
    public function cidades(){
      return $this->hasMany('App\Cidade');
    }
}
