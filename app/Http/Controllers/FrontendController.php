<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;

class FrontendController extends Controller
{
    public function index()
    {
      $categories = Category::orderBy('id','asc')->where('status','active')->get();
      $brands = Brand::orderBy('id','asc')->where('status','active')->get();
      $topbrands = Brand::orderBy('id','asc')->where('top_brand','1')->get();
        $products = Product::orderBy('id','asc')->where('status','1')->get();
        // print_r($products);die();
      return view('frontend.index',compact('categories','brands','products','topbrands'));
    }
}
