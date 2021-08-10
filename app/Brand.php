<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
public static function brandDetails($url)
{
  $brandDetails = Brand::select('id','name','url')->where('url',$url)->first()->toArray();
 // dd($brandDetails);die();
  $brandIds=array();
  $brandIds[] = $brandDetails['id'];
  return array('brandIds'=>$brandIds,'brandDetails'=>$brandDetails);
}
}
