<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agences extends Model
{
  protected $fillable = ['nom_agence','telephone','adresse','ville','entite_id'];


  public function entites()
  {
    return $this->belongsTo('App/Entite');
  }

}
