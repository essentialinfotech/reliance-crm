<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categories()
    {
    return $this->hasMany('App\Category','parent_id');
    }
    public static function ParentOrNotCategory($parent_id,$child_id)
    {
    $categories = Category::where('id',$child_id)->where('parent_id',$parent_id)->get();
    // echo "<pre>";print_r($categories);die();
  if (!is_null($categories)) {
  return true;
  }else {
    return false;
  }

    }

}
