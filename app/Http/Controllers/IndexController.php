<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Banner;
use App\Brand;

class IndexController extends Controller
{
    public function index()
    {
      $products = Product::inRandomOrder()->where('status',1)->where('feature_item',1)->paginate(6);
    // $products = Product::inRandomOrder()->where('status',1)->where('feature_item',1)->get();
    //       $products = json_decode(json_encode($products));


       // $categories = json_decode(json_encode($categories));
       // echo "<pre>"; print_r($categories);die;
$fev_products = Product::where('status',1)->get();
         $topbrands = Brand::orderBy('id','asc')->where('top_brand','1')->get();
 $categories_menu = "";
   $categories = Category::with('categories')->where(['parent_id'=>0])->get();
   $categories = json_decode(json_encode($categories));
       foreach($categories as $cat){

   $categories_menu .= " <div class='panel-heading'>
           <h4 class='panel-title'>
             <a data-toggle='collapse' data-parent='#accordian' href='#" .$cat->id."'>
               <span class='badge pull-right'><i class='fa fa-plus'></i></span>
           ".$cat->name."
             </a>
           </h4>
         </div>
         <div id='".$cat->id."' class='panel-collapse collapse'>
           <div class='panel-body'>
             <ul>";
             $sub_categories = Category::with('categories')->where(['parent_id' =>$cat->id])->get();
             foreach ($sub_categories as $subcat) {

                 $categories_menu .= " <li><a href='".$subcat->url."'>".$subcat->name." </a></li>";

             }

             $categories_menu .= "
             </ul>
           </div>
         </div>
         ";

       }
    $banners = Banner::where('status','1')->get();
    $allBrands = Brand::count();
    $brands = Brand::orderBy('id','asc')->where('status','active')->get();
    $meta_title="DrollyPets";
    $meta_description = "Online Shopping Site for pets Anymels";
    $meta_keywords = "eshop website, online shopping,Pets Food";
    return view('index',compact('allBrands','products','fev_products','categories','banners','categories_menu','meta_title','meta_description','meta_keywords','topbrands','brands'));
    }

}
