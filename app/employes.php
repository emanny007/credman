<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employes extends Model
{
  protected $fillable = ['login','password','nom','prenom','email','telephone','role','service','date_naiss','statut','adresse','photo','agence','biographie','entite'];


  public function messages()
  {
    return $this->hasMany('App/Message');
  }

  public function avis()
  {
    return $this->hasMany('App/Avi');
  }

  public function decisions()
  {
  return $this->hasMany('App/Decision');
  }

  public function dossiercredits()
  {
    return $this->belongsToMany('App/Dossiercredit');
  }

  public function questions()
  {
    return $this->hasMany('App/Question');
  }

  public function reponses()
  {
    return $this->hasManyThrough('App/Reponse','App/Question');
  }

}
