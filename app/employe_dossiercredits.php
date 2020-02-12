<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe_dossiercredits extends Model
{
    protected $fillable = ['employe_id','dossiercredit_id','date_imputation'];

    public function employes()
    {
      return $this->belongsTo('App/Employe');
    }

    public function dossiercredits()
    {
      return $this->belongsTo('App/Dossiercredit');
    }


}
