<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class decisions extends Model
{
  protected $fillable = ['decision','note','date_decision','droit_veto','date_veto','employe_id','dossiercredit_id'];

  public function employes()
  {
    return $this->belongsTo('App/Employe');
  }

  public function dossiercredits()
  {
    return $this->belongsTo('App/Dossiercredit');
  }
}
