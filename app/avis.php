<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avis extends Model
{
  protected $fillable = ['description','auteur','date_avis','nature','employe_id','dossiercredit_id'];


  public function employes()
  {
    return $this->belongsTo('App/Employe');
  }

  public function dossiercredits()
  {
    return $this->belongsTo('App/Dossiercredit');
  }

}
