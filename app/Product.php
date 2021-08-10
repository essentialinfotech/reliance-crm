<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;
use Session;
use DB;
class Product extends Model
{
  
  
    protected $fillable = [
        'product_name'
    ];
  public function attributes()
  {
    return $this->hasMany('App\ProductAttribute','product_id');
  }
   public function images()
  {
    return $this->hasMany('App\ImageAdd');
  }
  public function brand(){

       return $this->belongsTo('App\Brand','brand_id');
   }

   public function question(){

        return $this->belongsTo('App\Question','product_id');
    }
    public function review(){

         return $this->belongsTo('App\ProductReview','product_id');
     }

     public static function productCount($cat_id){
          $catCount = Product::where(['category_id'=>$cat_id,'status'=>1])->count();
          return $catCount;
        }


   public static function cartCount(){
     if(Auth::check()){
       // User is logged in; We will use Auth
       $user_email = Auth::user()->email;
       $cartCount = DB::table('carts')->where('user_email',$user_email)->sum('quantity');
     }else{
       // User is not logged in. We will use Session
       $session_id = Session::get('session_id');
       $cartCount = DB::table('carts')->where('session_id',$session_id)->sum('quantity');
     }
     return $cartCount;
   }


}
