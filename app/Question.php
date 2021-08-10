<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  public function answer()
  {
    return $this->hasMany('App\Answer','question_id');
  }

  public function user(){

    return $this->belongsTo('App\User');
}
}
