<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

use Mail;

use App\Http\Requests;
use App\Product;
use App\Category;
use App\ProductAttribute;
use App\Coupon;
use App\User;
use App\Country;
use App\Question;
use App\ProductReview;
use App\Answer;
use App\DeliveryAddress;
use App\Order;
use App\OrdersProduct;
use App\Brand;
use App\ImageAdd;
use App\Banner;
use Auth;
Use Image;
use Carbon\Carbon;

class ProductController extends Controller
{
  public $email;

  function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('products')
        ->where('product_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <div id="search"><a href="">'.$row->product_name.'</a></div>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
   
    }


    // public function searchProducts(Request $request)
    // {
    //  if ($request->isMethod('post')) {
    //    $data = $request->all();
       
    //      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
    //    $search_product = $data['serach'];
    //     $productsAll = Product::where('status','1')->get();
    
    //     $breadcrumb = "<a href='/'>Home</a> / ".$search_product;
    //      return view('products.listing',compact('categories','search_product','productsAll','breadcrumb'));
    //  }
    // }

    // public function searchProducts(Request $request)
    //  {
    //   if ($request->isMethod('post')) {
    //     $data = $request->all();
    //      echo "<pre>";print_r($data);die;  $categories = Category::with('categories')->where(['parent_id'=>0])->get();
    //       $categories = Category::with('categories')->where(['parent_id'=>0])->get();
    //     $search_product = $data['product'];
    //      $productsAll = Product::where('product_name','like','%'.$search_product.'%')->orWhere('product_code',$search_product)->where('status','1')->get();
    //    $productsAll=Product::where(function($query) use($search_product){
    //      $query->where('product_name','like','%'.$search_product.'%')
    //      ->orWhere('product_code','like'.$search_product.'%')
    //      ->orWhere('product_color','like'.$search_product.'%')
    //      ->orWhere('description','like'.$search_product.'%');
    //    })->where('status',1)->get();
    //  $breadcrumb = "<a href='/'>Home</a> / ".$search_product;
    //       return view('products.listing',compact('categories','search_product','productsAll','breadcrumb'));
    //   }
    //  }

     
   
  public function add(Request $request)
  {


     if ($request->isMethod('post')) {
       $data = $request->all();
  //echo "<pre>"; print_r($data); die;
       if (empty($data['category_id'])) {
        return redirect()->back()->with('flash_message_error',' Under Category is missing');
      }

       $product = new Product;
       $product->category_id =$data['category_id'];
       $product->brand_id =$data['brand_id'];
       $product->product_name =$data['product_name'];
       $product->product_code =$data['product_code'];
       $product->product_color =$data['product_color'];
       $product->buying_price = $data['buying_price'];
      $product->selling_price = $data['selling_price'];
      $product->special_price = $data['special_price'];
      $product->special_start = $data['special_start'];
      $product->special_end = $data['special_end'];
      $product->feeding = $data['feeding'];

       if (!empty($data['description'])) {
        $product->description =$data['description'];
      }else {
        $product->description ='';
      }

      if (!empty($data['long_description'])) {
       $product->long_description =$data['long_description'];
     }else {
       $product->long_description ='';
     }

     if (empty($data['status'])) {
      $status ='0';
    }else {
      $status ='1';
    }

    if (empty($data['feature_item'])) {
     $feature_item ='0';
   }else {
     $feature_item ='1';
   }


       //upload Image
        if ($request->hasFile('image')) {
        $image_tmp = $request->file('image');
        if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename=rand(111,99999).'.'.$extension;
        $large_image_path = 'images/backend_images/products/large/'.$filename;
        $medium_image_path = 'images/backend_images/products/medium/'.$filename;
        $small_image_path = 'images/backend_images/products/small/'.$filename;

        Image::make($image_tmp)->resize(600,600)->save($large_image_path);
        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
        Image::make($image_tmp)->resize(20,20)->save($small_image_path);
           $product->image =$filename;
        }
        }

         //upload Image
        $images =[];
        if ($request->hasFile('thumbanil')) {
          $i =0;

         foreach($request->file('thumbanil') as $file) {
                $fileEx = $file->getClientOriginalName();
                $fileName = date('Ymdhis_') . $i .'.'.$fileEx;

                Image::make($file)
                    ->resize(500,250)
                    ->save(public_path('images/backend_images/products/thumbanil/medium/'.$fileName));
                    
                 $images[] = $fileName;
                $i++;
            }
        
        }
        // print_r($images);die();
       $product->thumbanil=json_encode($images);
        $product->feature_item = $feature_item;
        $product->status = $status;
       $product->save();
       return redirect()->route('admin.product.view')->with('flash_message_success',' Product add Successfully');
         //return redirect()->back()->with('flash_message_success',' Product add Successfully');
}
$brands = Brand::get();
  $categories = Category::where(['parent_id' =>0])->get();
  $categories_dropdown = "<option value='' selected disabled>Select</option>";
  foreach($categories  as $cat){
    $categories_dropdown .="<option value='".$cat->id." '>".$cat->name."</option>";
    $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
    foreach($sub_categories as $sub_cat){
      $categories_dropdown .="<option value='".$sub_cat->id." '>&nbsp;--&nbsp;".$sub_cat->name."</option>";

    }
  }


      return view('admin.products.add_product',compact('categories_dropdown','brands'))->with('flash_message_success',' Product Add Successfully');

  }
  public function edit(Request $request,$id=null)
  {

    if ($request->isMethod('post')) {
      $data = $request->all();
      // echo "<pre>"; print_r($data); die;
      if (empty($data['status'])) {
       $status ='0';
     }else {
       $status ='1';
     }

     if (empty($data['feature_item'])) {
      $feature_item ='0';
    }else {
      $feature_item ='1';
    }

      if ($request->hasFile('image')) {
      $image_tmp = $request->file('image');
      if ($image_tmp->isValid()) {
      $extension = $image_tmp->getClientOriginalExtension();
      $filename=rand(111,99999).'.'.$extension;
      $large_image_path = 'images/backend_images/products/large/'.$filename;
      $medium_image_path = 'images/backend_images/products/medium/'.$filename;
      $small_image_path = 'images/backend_images/products/small/'.$filename;

      Image::make($image_tmp)->save($large_image_path);
      Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
      Image::make($image_tmp)->resize(20,20)->save($small_image_path);
}
    }else if(!empty($data['current_image'])) {
        $filename = $data['current_image'];
    }else{
      $filename ='';
    }

    if (empty($data['description'])) {
     $description ='';
   }

   if (empty($data['care'])) {
    $care ='';
  }

      Product::where(['id'=>$id])->update(['status'=>$status,'feature_item'=>$feature_item,'category_id'=>$data['category_id'],
      'product_name'=>$data['product_name'],'product_code'=>$data['product_code'],
      'product_color'=>$data['product_color'] ,'selling_price'=>$data['selling_price'] ,'buying_price'=>$data['buying_price'],
      'special_start'=>$data['special_start'],'special_price'=>$data['special_price'],
      'special_end'=>$data['special_end'],'description'=>$data['description'],
      'long_description'=>$data['long_description'],'feeding'=>$data['feeding'],'image'=>$filename]);

        return redirect()->route('admin.product.view')->with('flash_message_success',' Product has update Successfully');

    }
    $productDetails = Product::where(['id' =>$id])->first();
    $categories = Category::where(['parent_id' =>0])->get();
    $categories_dropdown = "<option value='' selected disabled>Select</option>";
    foreach($categories  as $cat){
      if($cat->id == $productDetails->category_id) {
    $selected = "selected";
  }else {
    $selected ="";
  }
      $categories_dropdown .="<option value='".$cat->id." ' ".$selected.">".$cat->name."</option>";

      $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
      foreach($sub_categories as $sub_cat){
        if($sub_cat->id == $productDetails->category_id) {
      $selected = "selected";
    }else {
      $selected ="";
    }
        $categories_dropdown .="<option value='".$sub_cat->id." ' ".$selected.">&nbsp;--&nbsp;".$sub_cat->name."</option>";

      }
    }

    return view('admin.products.edit_product',compact('productDetails','categories_dropdown'));
  }

public function delete($id = null)
{
  $productImage = Product::where(['id'=>$id])->delete();

return redirect()->back()->with('flash_message_success',' Product delete Successfully');

}


 public function deleteProductImage($id = null)
 {
   $productImage = Product::where(['id'=>$id])->first();
   $large_image_path = 'images/backend_images/products/large/';
   $medium_image_path = 'images/backend_images/products/medium/';
   $small_image_path = 'images/backend_images/products/small/';

   if(file_exists($large_image_path.$productImage->image)) {
   unlink($large_image_path.$productImage->image);
   }

   if(file_exists($medium_image_path.$productImage->image)) {
   unlink($medium_image_path.$productImage->image);
   }

   if(file_exists($small_image_path.$productImage->image)) {
   unlink($small_image_path.$productImage->image);
   }
   Product::where(['id'=>$id])->update(['image'=>'']);
 return redirect()->back()->with('flash_message_success',' Product Image delete Successfully');

 }

  public function view()
  {
    $products = Product::orderBy('id','desc')->get();
    $products =json_decode(json_encode($products));
    foreach($products as $key => $val){

      $category_name = Category::where(['id' => $val->category_id])->first();
      $products[$key]->category_name = $category_name->name;
    }
// echo "<pre>";print_r($products); die;
    return view('admin.products.view_product',compact('products'));
  }

public function addAttributes(Request $request,$id=null)
{
$productDetails = Product::with('attributes')->where(['id'=>$id])->first();
// $productDetails = json_decode(json_encode($productDetails));
// echo "<pre>";print_r($productDetails); die;
  $categoryDetails = Category::where(['id'=>$productDetails->category_id])->first();
   $category_name = $categoryDetails->name;
if($request->isMethod('post')) {
  $data = $request->all();
// echo "<pre>";print_r($data); die;
  foreach($data['sku'] as $key => $val){
    if (!empty($val)) {
          $attrCountSKU = ProductAttribute::where('sku',$val)->count();
          if ($attrCountSKU>0) {
          return redirect('/admin/product/add-attributetes/'.$id)->with('flash_message_error',' SKU already exists ! Please add another SKU');
          }
            // $attrCountSizes = ProductAttribute::where(['product_id'=>$id,'size'=>$data['size'][$key]])->count();
            // if ($attrCountSize>0) {
            //    return redirect('/admin/product/add-attributetes/'.$id)->with('flash_message_error',' Size already exists ! Please add another Size');
            // }

      $attribute = new ProductAttribute;
      $attribute->product_id =$id;
      $attribute->sku =$val;
      $attribute->size = $data['size'][$key];
      $attribute->price = $data['price'][$key];
      $attribute->stock = $data['stock'][$key];
      $attribute->save();

    }
  }
  return redirect('/admin/product/add-attributetes/'.$id)->with('flash_message_success',' Product Attribute Add Successfull');
}
$title = "Add Attributes";

  return view('admin.products.add_attributes',compact('productDetails','title','category_name'));
}

public function editAttributes(Request $request,$id=null)
{
if ($request->isMethod('post')) {
  $data = $request->all();
  // echo "<pre>";print_r($data);die();
  foreach ($data['idAttr'] as $key => $attr) {
    ProductAttribute::where(['id'=>$data['idAttr'][$key]])->update(['price'=>$data['price'][$key],'stock'=>$data['stock'][$key]]);
  }
  return redirect()->back()->with('flash_message_success','Attribute update successfully');
}
}
public function addImages(Request $request,$id)
{


  if($request->isMethod('post')) {
    // $data = $request->all();
    // echo "<pre>";print_r($data);die();
  if ($request->hasFile('thumbnail')) {
   $images = $request->file('thumbnail');
   foreach ($images as $key => $image) {
    $productimage = new ImageAdd;
    // echo "<pre>";print_r(( $productimage));die();
    $image_tmp = Image::make($image);

    // echo $orginalName = $image->getClientOriginalName();die();
    $extension = $image->getClientOriginalExtension();
    $imageName =  rand(111,99999).time().".".$extension;
    
        $medium_image_path = 'images/backend_images/products/thumbanil/medium/'.$imageName;
       

       
        Image::make($image_tmp)->save($medium_image_path);

        $productimage->product_id = $id;
       
      
           $productimage->thumbnail =$imageName;
           
           $productimage->save();
           

   }
  }
// echo "<pre>";print_r($data);die();
  // $productDetails = Product::with('images')->select('id','product_name','product_code')->find($id);
  // $productDetails=json_decode(json_encode($productDetails),true);
}
  $productDetails = Product::with('images')->select('id','product_name','product_code')->find($id);
  $productDetails=json_decode(json_encode($productDetails),true);
 //  echo "<pre>";print_r(($productDetails));die();
 // $productDetails = Product::with('images')->where(['id'=>$id])->first();


  return view('admin.products.add_images',compact('productDetails'));
}

public function brand()
{

  $brands = Brand::where('top_brand','1')->get();
  $allBrands = Brand::get();
return view('products.brand',compact('brands','allBrands'));
}

public function products_brands($url)
{

$brandcount = Brand::where('url',$url)->count();
$Details = Brand::where(['url'=>$url])->first();
if ($brandcount >0) {
    $brandDetails = Brand::brandDetails($url);


    // echo "<pre>";print_r($brandDetails);die();
    $brandProducts = Product::whereIn('brand_id',$brandDetails['brandIds']);
    if (isset($_GET['sort']) && !empty($_GET['sort'])) {
    if ($_GET['sort']=="product_latest") {
      $brandProducts->orderBy('id','DESC');
    }else if ($_GET['sort']=="Product_name_a_z") {
    $brandProducts->orderBy('product_name','ASC');
  }else if ($_GET['sort']=="Product_name_z_a") {
    $brandProducts->orderBy('product_name','DESC');
    }else if ($_GET['sort']=="pricelowtohigh") {
    $brandProducts->orderBy('selling_price','ASC');
    }else if ($_GET['sort']=="pricehightolow") {
    $brandProducts->orderBy('selling_price','DESC');
    }

    }else {

    }

    $breadcrumb = "<a href='/'>Home</a> > <a href='".$Details->url."'>
    ".$Details->name."</a>";

      // echo "<pre>";print_r($brandProducts);die();
      if (!empty($_GET['name'])) {
      $categoryArray = explode('-',$_GET['name']);
      $brandProducts = $brandProducts->join('categories','categories.id','=','id')
      ->select('products.*','categories.id','categories.name')
       // ->groupBy('product_attributes.product_id')
      ->whereIn('categories.name',$categoryArray);
      }

      $categoryArray = Category::select('name')->where('parent_id','!=','0')->where('name','!=','')->groupBy('name')->get();
      $categoryArray = Arr::flatten(json_decode(json_encode($categoryArray),true));

      //flavour

      if (!empty($_GET['color'])) {
      $colorArray = explode('-',$_GET['color']);
      $brandProducts = $brandProducts->whereIn('product_color',$colorArray);
      }


      $colorArray = Product::select('product_color')->groupBy('product_color')->get();
      $colorArray = Arr::flatten(json_decode(json_encode($colorArray),true));

$brandProducts = $brandProducts->paginate(5);
    return view('products.brand_listing',compact('brandDetails','brandProducts','breadcrumb','url','categoryArray','colorArray'));
}else {
  abort(404);
}
// $brandDetails_id = $brandDetails->id;
// $productsAll = Product::with('brand')->whereIn('products.brand_id',$brandDetails_id);
// // dump($productsAll);die();
$banners = Banner::where('status','1')->get();

  return view('products.brand_listing',compact('productsAll','banners'));
}

public function brand_filter(Request $request)
{

$data = $request->all();
//category FIlter
$categoryUrl="";
if (!empty($data['categoryFilter'])) {
foreach ($data['categoryFilter'] as $category) {
if (empty($categoryUrl)) {
$categoryUrl = "&category=".$category;
}else {
  $categoryUrl .="-".$category;
}
}
}

//flavour

$colorUrl="";
if (!empty($data['colorFilter'])) {
foreach ($data['colorFilter'] as $color) {
if (empty($colorUrl)) {
$colorUrl = "&color=".$color;
}else {
  $colorUrl .="-".$color;
}
}
}


$finalUrl = "/".$data['url']."?".$categoryUrl.$colorUrl;
return redirect::to($finalUrl);
}

public function products($url = null)
{

   $categoryCount = Category::where(['url'=>$url,'status'=>1])->count();
   if ($categoryCount==0) {
     abort(404);
   }

    $categories = Category::with('categories')->where(['parent_id'=> 0])->get();

    $categoryDetails = Category::where(['url'=>$url])->first();
   // echo "<pre>";print_r($categoryDetails->id);die();


      if($categoryDetails->parent_id==0) {
      $subCategories = Category::where(['parent_id'=>$categoryDetails->id])->get();
     // $subCategories= json_decode(json_encode($subCategories));
      foreach($subCategories as $subcat){

        $cat_ids[] = $subcat->id;
      }

      $productsAll = Product::with('brand')->whereIn('products.category_id',$cat_ids)
      ->where('products.status','1');


      $breadcrumb = "<a href='/'>Home</a> > <a href='".$categoryDetails->url."'>
      ".$categoryDetails->name."</a>";

    }else {
       $productsAll = Product::with('brand')->where(['products.category_id'=>$categoryDetails->id])
       ->where('products.status','1');
      ;
       $mainCategory = Category::where('id',$categoryDetails->parent_id)->first();
           $breadcrumb = "<a href='/'>Home</a> > <a href='".$mainCategory->url."'>
          ".$mainCategory->name."</a>
            > <a href='".$categoryDetails->url."'>
           ".$categoryDetails->name."</a>";
    }



// //sorting
// if (isset($_GET['sort']) && !empty($_GET['sort'])) {
// if ($_GET['sort']=="product_latest") {
//   $productsAll->orderBy('id','DESC');
// }else if ($_GET['sort']=="Product_name_a_z") {
// $productsAll->orderBy('product_name','ASC');
// }else if ($_GET['sort']=="Product_name_z_a") {
// $productsAll->orderBy('product_name','DESC');
// }else if ($_GET['sort']=="pricelowtohigh") {
// $productsAll->orderBy('selling_price','ASC');
// }else if ($_GET['sort']=="pricehightolow") {
// $productsAll->orderBy('selling_price','DESC');
// }
//
// }else {
//
// }


// $productsAll = $productsAll;
  // category_id
  if (!empty($_GET['name'])) {
  $categoryArray = explode('-',$_GET['name']);
  $productsAll = $productsAll->join('categories','categories.id','=','id')
  ->select('products.*','categories.id','categories.name')
   ->groupBy('categories.product_id')
  ->whereIn('categories.name',$categoryArray);
  }
  // category

  // Brand

  if (!empty($_GET['name'])) {
  $brandArray = explode('-',$_GET['name']);
  $productsAll = $productsAll->join('brands','brands.id','=','id')
  ->select('products.*','brands.id','brands.name')
   ->groupBy('brands.product_id')
  ->whereIn('brands.name',$brandArray);
  }
  //
if (!empty($_GET['color'])) {
$colorArray = explode('-',$_GET['color']);
$productsAll = $productsAll->whereIn('product_color',$colorArray);
}
$productsAll = $productsAll->paginate(6);
$categoryArray = Category::select('name')->where('parent_id','!=','0')->where('name','!=','')->groupBy('name')->get();
$categoryArray = Arr::flatten(json_decode(json_encode($categoryArray),true));

$brandArray = Brand::select('name')->where('name','!=','')->groupBy('name')->get();
$brandArray = Arr::flatten(json_decode(json_encode($brandArray),true));


 $colorArray = Product::select('product_color')->groupBy('product_color')->get();
 $colorArray = Arr::flatten(json_decode(json_encode($colorArray),true));
 $banners = Banner::where('status','1')->get();

 //category FIlter
 // $categoryArray = Product::select('category_id')->groupBy('category_id')->get();
 // $categoryArray = Arr::flatten(json_decode(json_encode($categoryArray),true));
  return view('products.listing',compact('categories','categoryDetails',
  'productsAll','url','colorArray','categoryArray','brandArray','breadcrumb','banners'));
}

public function filter(Request $request)
{

$data = $request->all();
 // echo "<pre>";print_r($data);die;
$colorUrl="";
if (!empty($data['colorFilter'])) {
foreach ($data['colorFilter'] as $color) {
if (empty($colorUrl)) {
$colorUrl = "&color=".$color;
}else {
  $colorUrl .="-".$color;
}
}
}

//brand stream_get_filters

$brandUrl="";
if (!empty($data['brandFilter'])) {
foreach ($data['brandFilter'] as $brand) {
if (empty($brandUrl)) {
$brandUrl = "&brand=".$brand;
}else {
  $brandUrl .="-".$brand;
}
}
}

//category FIlter
$categoryUrl="";
if (!empty($data['categoryFilter'])) {
foreach ($data['categoryFilter'] as $category) {
if (empty($categoryUrl)) {
$categoryUrl = "&category=".$category;
}else {
  $categoryUrl .="-".$category;
}
}
}

$finalUrl = "products/".$data['url']."?".$colorUrl.$categoryUrl.  $brandUrl;
return redirect::to($finalUrl);
}

 public function autocomplete(Request $request)
    {
        $data = Product::select("product_name")
                ->where("product_name","LIKE","%{$request->input('query')}%")
                ->get();

   
        return response()->json($data);
    }

// public function searchProducts(Request $request)
// {
//  if ($request->isMethod('post')) {
//    $data = $request->all();
//    // echo "<pre>";print_r($data);die;  $categories = Category::with('categories')->where(['parent_id'=>0])->get();
//      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
//    $search_product = $data['product'];
//    // $productsAll = Product::where('product_name','like','%'.$search_product.'%')->orWhere('product_code',$search_product)->where('status','1')->get();
//   $productsAll=Product::where(function($query) use($search_product){
//     $query->where('product_name','like','%'.$search_product.'%')
//     ->orWhere('product_code','like'.$search_product.'%')
//     ->orWhere('product_color','like'.$search_product.'%')
//     ->orWhere('description','like'.$search_product.'%');
//   })->where('status',1)->get();
// $breadcrumb = "<a href='/'>Home</a> / ".$search_product;
//      return view('products.listing',compact('categories','search_product','productsAll','breadcrumb'));
//  }
// }


public function product($id = null)
{

     $productDetails = Product::with('attributes','brand','images')->where('id',$id)->first();
     // dd($productDetails);die();
   $product_image = $productDetails->thumbanil;
    // dd($product_image);die();
    //  $count = count($product_image);
    //  echo $count;die();
    $productDetails = json_decode(json_encode($productDetails));
    // $product_image = $productDetails['thumbanil'];
    // dd($product_image);die();
     // $image = explode(',', $product_image);
     // $count = count($image);
     // for ($i=0; $i <$count ; $i++) { 
     //   $photo = $image[$i]."<br>";
     // }
 
 // echo "<pre>"; print_r($productDetails);die;
//
//       // $products = Product::orderBy('id','desc')->get();
//       // $products =json_decode(json_encode($products));
//
//       // new
//       foreach($productDetails as $key => $val){
//
//         $category_name = Category::where(['id' => $val->category_id])->first();
//         $productDetails[$key]->category_name = $category_name->name;
//       }
// // end new
      $question_answer = Question::with('answer')->where('product_id',$productDetails->id)->where('status','visible')->get();

       $question_answer = json_decode(json_encode($question_answer));
         $review = ProductReview::where('product_id',$productDetails->id)->where('status','visible')->get();
                $review = json_decode(json_encode($review));
 // echo "<pre>"; print_r($review);die();
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();


      $categoryDetails = Category::where('id',$productDetails->category_id)->first();
       if($categoryDetails->parent_id==0){
           $breadcrumb = "<a href='/'>Home</a> / <a href='".$categoryDetails->url."'>".$categoryDetails->name."</a> / ".$productDetails->product_name;
       }else{
           $mainCategory = Category::where('id',$categoryDetails->parent_id)->first();
           $breadcrumb = "<a style='color:#333;' href='/'>Home</a> / <a style='color:#333;' href='/products/".$mainCategory->url."'>".$mainCategory->name."</a> / <a style='color:#333;' href='/products/".$categoryDetails->url."'>".$categoryDetails->name."</a> / ".$productDetails->product_name;
       }
      //$productAltImages = ProductImages::where('parent_id',$id)->get();
      $total_stock = ProductAttribute::where('product_id',$id)->sum('stock');
        $total_question = Question::where('product_id',$id)->count('message');
        $total_review = ProductReview::where('product_id',$id)->count('message');

      return view('products.detail',compact('productDetails','categories','total_stock','categoryDetails','question_answer','review','total_question','total_review','product_image'));
}

public function getProductPrice(Request $request)
{

if ($request->ajax()) {
  $data = $request->all();
  // echo "<pre>";print_r($data);die();
  $getProductPrice = ProductAttribute::where(['product_id'=>$data['product_id'],'size'=>$data['size']])->first();
 return $getProductPrice->price;
}

}

public function addtocart(Request $request)
{
Session::forget('CouponAmount');
Session::forget('CouponCode');
$data = $request->all();
  // echo "<pre>"; print_r($data);die;
 if (empty(Auth::user()->email)) {
$data['user_email']='';
}else {
  $data['user_email']= Auth::user()->email;
}

$session_id = Session::get('session_id');
 if(!isset($session_id)) {
   $session_id = Str::random(40);
   Session::put('session_id',$session_id);
 }
 $sizeArr = explode("-",$data['size']);
if (empty(Auth::check())) {
  $countProducts=DB::table('carts')->where(['product_id'=>$data['product_id'],
    'product_color'=>$data['product_color'],'size'=>$data['size'],
    'session_id'=>$session_id])->count();
if($countProducts>0) {
 return redirect()->back()->with('flash_message_error','Product already exists in Cart!');
}
}else {
  $countProducts=DB::table('carts')->where(['product_id'=>$data['product_id'],
              'product_color'=>$data['product_color'],'size'=>$data['size'],
              'user_email'=>$data['user_email']])->count();

if($countProducts>0) {
 return redirect()->back()->with('flash_message_error','Product already exists in Cart!');

}
}

  DB::table('carts')->insert(['product_id'=>$data['product_id'],
  'product_name'=>$data['product_name'],'product_code'=>$data['product_code'],
  'product_color'=>$data['product_color'],'price'=>$data['price'],
  'size'=>$data['size'],'quantity'=>$data['quantity'],
  'user_email'=>$data['user_email'],'session_id'=>$session_id]);


 return redirect('user/cart')->with('flash_message_success','Product has been added in Cart!');
}

public function cart()
{
  if(Auth::check()) {
  $user_email = Auth::user()->email;
  $userCart = DB::table('carts')->where(['user_email'=>$user_email])->get();
}else{
  $session_id = Session::get('session_id');
  $userCart = DB::table('carts')->where(['session_id'=>$session_id])->get();
}
  foreach ($userCart as $key => $product) {
   $productDetails = Product::where('id',$product->product_id)->first();
   $userCart[$key]->image = $productDetails->image;
  }
   // echo "<pre>"; print_r($userCart);die;
return view('products.cart',compact('userCart'));
}

public function deleteCartProduct($id=null)
{
    Session::forget('CouponAmount');
    Session::forget('CouponCode');

DB::table('carts')->where('id',$id )->delete();
return redirect('user/cart')->with('flash_message_success','Cart Item has delete successfully');
}


public function updateCartQuantity($id=null,$quantity=null)
{
  Session::forget('CouponAmount');
 Session::forget('CouponCode');
$getCartDetails =  DB::table('carts')->where('id',$id)->first();
  DB::table('carts')->where('id',$id)->increment('quantity',$quantity);
  return redirect('user/cart')->with('flash_message_success','Product Quantity has been update successfully ');
}


public function applyCoupon(Request $request)
{
   Session::forget('CouponAmount');
 Session::forget('CouponCode');
$data = $request->all();
// echo "<pre>"; print_r($data);die;
$couponCount =Coupon::where('coupon_code',$data['coupon_code'])->count();
if ($couponCount == 0) {
return redirect()->back()->with('flash_message_error','Coupon is not valid');
}else {
$couponDetails =Coupon::where('coupon_code',$data['coupon_code'])->first();
if($couponDetails->status==0) {
return redirect()->back()->with('flash_message_error','Coupon is not active');
}
$expiry_date = $couponDetails->expiry_date;
 $currebt_date = date('Y-m-d');
 if ($expiry_date<$currebt_date) {
   return redirect()->back()->with('flash_message_error','Coupon is expired!!');
 }
$session_id = Session::get('session_id');

if (Auth::check()) {
$user_email = Auth::user()->email;
$userCart = DB::table('carts')->where(['user_email'=>$user_email])->get();
}else{
$session_id = Session::get('session_id');
$userCart = DB::table('carts')->where(['session_id'=>$session_id])->get();
}

$total_amount = 0;
foreach ($userCart as $item) {
$total_amount = $total_amount + ($item->price * $item->quantity);
}

if ($couponDetails->amount_type=='Fixed') {
  $couponAmount = $couponDetails->amount;

}else {

  $couponAmount = $total_amount * ($couponDetails->amount/100);
}
Session::put('CouponAmount', $couponAmount);
Session::put('CouponCode', $data['coupon_code']);

return redirect()->back()->with('flash_message_success','Coupon Code successfully Applied. You are availing discount!!');
}

}

public function question(Request $request)
{
  $user_id = Auth::user()->id;
  $userDetails = User::find($user_id);
  if ($request->isMethod('post')) {
 $data = $request->all();
 // echo "<pre>";print_r($data);die;
 $shipping = new Question;
 $shipping->user_id = $user_id;
 $shipping->product_id=$data['product_id'];
 $shipping->message=$data['message'];
 $shipping->name=$data['name'];
 $shipping->save();

return redirect()->back();
}
}

public function review(Request $request,$id)
{

   $productDetails = Product::with('review')->where(['id' =>$id])->first();


return view('products.review',compact('productDetails'));
}


public function reviewAdd(Request $request)
{
  $user_id = Auth::user()->id;
  $userDetails = User::find($user_id);

 if ($request->isMethod('post')) {
$data = $request->all();
 // echo "<pre>";print_r($data);die;
$review = new ProductReview;
$review->user_id = $user_id;
$review->product_id=$data['product_id'];
$review->name=$data['name'];
$review->title=$data['title'];
$review->message=$data['message'];
$review->image=$data['image'];
$review->save();

return redirect()->back();
}

return view('products.review',compact('productDetails'));
}
public function checkout(Request $request)
{


  $user_id = Auth::user()->id;
  $user_email = Auth::user()->email;
  $userDetails = User::find($user_id);


  //new Start



  $userCart = DB::table('carts')->where(['user_email'=>$user_email])->get();

  foreach ($userCart as $key => $product) {
   $productDetails = Product::where('id',$product->product_id)->first();
   $userCart[$key]->image = $productDetails->image;
  }

//new end
  $countries = Country::get();
  $shippingDetails = DeliveryAddress::get();
    $shippingCount = DeliveryAddress::where('user_id',$user_id)->count();
    if ($shippingCount>0) {
    $shippingDetails = DeliveryAddress::where('user_id',$user_id)->first();
    }
  $session_id =Session::get('session_id');
  DB::table('carts')->where(['session_id'=>$session_id])->update(['user_email'=>$user_email]);

  if ($request->isMethod('post')) {
 $data = $request->all();
 // echo "<pre>";print_r($data);die;
 if (empty($data['billing_name']) || empty($data['billing_address']) || empty($data['billing_city'])
|| empty($data['billing_state']) || empty($data['billing_country']) || empty($data['billing_pincode']) || empty($data['billing_mobile'])
|| empty($data['shipping_name']) || empty($data['shipping_address']) || empty($data['shipping_city'])
|| empty($data['shipping_state']) || empty($data['shipping_country']) || empty($data['shipping_pincode']) || empty($data['shipping_mobile'])) {
  return redirect()->back()->with('flash_message_error','Please Fill up all fields to checkout');
 }
 User::where('id',$user_id)->update(['name'=>$data['billing_name'],'address'=>$data['billing_address'],'city'=>$data['billing_city'],'state'=>$data['billing_state'],
'country'=>$data['billing_country'],'pincode'=>$data['billing_pincode'],'mobile'=>$data['billing_mobile']]);
if ($shippingCount>0) {
  DeliveryAddress::where('id',$user_id)->update(['name'=>$data['billing_name'],'address'=>$data['billing_address'],'city'=>$data['billing_city'],'state'=>$data['billing_state'],
 'country'=>$data['billing_country'],'pincode'=>$data['billing_pincode'],'mobile'=>$data['billing_mobile']]);
}else {
$shipping = new DeliveryAddress;
$shipping->user_id = $user_id;
$shipping->user_email = $user_email;
$shipping->name=$data['billing_name'];
$shipping->address=$data['billing_address'];
$shipping->city=$data['billing_city'];
$shipping->state=$data['billing_state'];
$shipping->country=$data['billing_country'];
$shipping->pincode=$data['billing_pincode'];
$shipping->mobile=$data['billing_mobile'];
$shipping->save();

}
return redirect()->route('user.orderReview');
  }
return view('products.checkout',compact('userDetails','countries','shippingDetails','userCart'));
}
public function orderReview()
{
  $user_id = Auth::user()->id;
  $user_email = Auth::user()->email;
  $userDetails = User::where('id',$user_id)->first();
 $shippingDetails = DeliveryAddress::where('user_id',$user_id)->first();
  $shippingDetails=json_decode(json_encode($shippingDetails));
  $userCart = DB::table('carts')->where(['user_email'=>$user_email])->get();

  foreach ($userCart as $key => $product) {
   $productDetails = Product::where('id',$product->product_id)->first();
   $userCart[$key]->image = $productDetails->image;
  }
  // echo "<pre>";print_r($userCart);die;
  // echo "<pre>";print_r($shippingDetails);die;
return view('products.order_review',compact('userDetails','shippingDetails','userCart'));
}


public function placeOrder(Request $request){
  if($request->isMethod('post')) {
    $data = $request->all();
      $user_id = Auth::user()->id;
      $user_email = Auth::user()->email;
      //shipping Address of User
      $shippingDetails = DeliveryAddress::where(['user_email'=>$user_email])->first();

      if(empty(Session::get('CouponCode'))) {
      $coupon_code = '';
    }else {
      $coupon_code = Session::get('CouponCode');
    }

      if(empty(Session::get('CouponAmount'))) {
          $coupon_amount = '';
      }else {
          $coupon_amount = Session::get('CouponAmount');
      }

    // echo "<pre>"; print_r($data);die;
    $order = new Order;
    $order->user_id = $user_id;
    $order->user_email = $user_email;
    $order->name= $shippingDetails->name;
    $order->address= $shippingDetails->address;
    $order->city= $shippingDetails->city;
    $order->state= $shippingDetails->state;
    $order->country= $shippingDetails->country;
    $order->pincode= $shippingDetails->pincode;
    $order->mobile= $shippingDetails->mobile;
    $order->coupon_code = $coupon_code;
    $order->coupon_amount = $coupon_amount;
    $order->order_status = "new";
    $order->payment_method = $data['payment_method'];
    $order->grand_total = $data['grand_total'];
    $order->save();

    $order_id = DB::getPdo()->lastInsertId();
    $cartProducts = DB::table('carts')->where(['user_email'=>$user_email])->get();
    foreach($cartProducts as $pro){
      $cartPro = new OrdersProduct;

      $cartPro->order_id = $order_id;
      $cartPro->user_id = $user_id;
      $cartPro->product_id = $pro->product_id;
      $cartPro->product_code = $pro->product_code;
      $cartPro->product_name = $pro->product_name;
      $cartPro->product_color = $pro->product_color;
      $cartPro->product_size = $pro->size;
      $cartPro->product_price = $pro->price;
      $cartPro->product_qty = $pro->quantity;
      $cartPro->save();

    }
    Session::put('order_id',$order_id);
    Session::put('grand_total',$data['grand_total']);
if ($data['payment_method']=="COD") {
  $productDetails = Order::with('orders')->where('id',$order_id)->first();
  $productDetails = json_decode(json_encode($productDetails),true);
  // echo "<pre>";print_r($productDetails);die;
 $userDetails = User::where('id',$user_id)->first();
 $userDetails = json_decode(json_encode($userDetails),true);
 // echo "<pre>";print_r($userDetails);die;

  $email = $user_email;
  $messageData=[
    'email' =>$email,
    'name'=>$shippingDetails->name,
    'order_id'=>$order_id,
    'productDetails' =>$productDetails,
    'userDetails'=>$userDetails
  ];
  Mail::send('email.order',$messageData,function($message) use($email){
    $message->to($email)->subject('order Placed - E-com Website');
  });
  return redirect()->route('user.thanks');
}elseif($data['payment_method']=="Paypal") {
  return redirect('/paywithpaypal');
}elseif ($data['payment_method']=="Payoneer") {
    return redirect()->route('user.payoneer');
}
elseif($data['payment_method']=="Debit-credit"){
  return redirect('stripe');
}elseif($data['payment_method']=="Bitcoin"){
    return redirect()->route('user.bitcoin');
}elseif($data['payment_method']=="Square"){
    return redirect()->route('user.square');
}else {
    return redirect()->route('user.tranwise');
}

  }
 }

 public function thanks(Request $request)
 {
   $user_email = Auth::user()->email;
   DB::table('carts')->where('user_email',$user_email)->delete();
  return view('orders.thanks');
 }

 public function paypal(Request $request)
 {
   $user_email = Auth::user()->email;
   DB::table('carts')->where('user_email',$user_email)->delete();

  return view('orders.paypal');
 }

 public function userOrders()
 {
   $user_id = Auth::user()->id;
   $orders =Order::with('orders')->where('user_id',$user_id)->orderBy('id','DESC')->get();
    // $orders =json_decode(json_encode($orders));
    // echo "<pre>";print_r($orders);die;
   return view('orders.users_orders',compact('orders'));
 }
 public function userOrderDetails($order_id)
 {
   $user_id = Auth::user()->id;
   $orderDetails = Order::with('orders')->where('id',$order_id)->first();
   $orderDetails = json_decode(json_encode($orderDetails));
   // echo "<pre>";print_r($orderDetails);die;
   return view('orders.users_order_details',compact('orderDetails'));
 }

 public function viewOrders()
 {
  $orders = Order::with('orders')->orderBy('id','Desc')->get();
   $orders = json_decode(json_encode($orders));
  // echo "<pre>";print_r($orders);die;
   return view('admin.orders.view_orders',compact('orders'));
 }

 public function viewOrderDetails($order_id)
 {
  $orderDetails = Order::with('orders')->where('id',$order_id)->first();
  $orderDetails = json_decode(json_encode($orderDetails));
   // echo "<pre>";print_r($orderDetails);die;
 $user_id = $orderDetails->user_id;
 $userDetails =User::where('id',$user_id)->first();
 // $userDetails = json_decode(json_encode($userDetails));
 // echo "<pre>";print_r($userDetails);die;

   return view('admin.orders.order_details',compact('orderDetails','userDetails'));
 }

 public function viewOrderInvoice($order_id)
 {
  $orderDetails = Order::with('orders')->where('id',$order_id)->first();
  $orderDetails = json_decode(json_encode($orderDetails));
 // echo "<pre>";print_r($orderDetails);die;
 $user_id = $orderDetails->user_id;
 $userDetails =User::where('id',$user_id)->first();
 // $userDetails = json_decode(json_encode($userDetails));
 // echo "<pre>";print_r($userDetails);die;

   return view('admin.orders.order_invoice',compact('orderDetails','userDetails'));
 }

 public function updateOrderStatus(Request $request)
 {
   if ($request->isMethod('post')) {
  $data = $request->all();
 // $order = Order::where('id',$data['order_id'])->first();
 //  $email = $order['user_email'];
 // dump($email);die();
  // $email = $data('user_email');


Order::where('id',$data['order_id'],)->update(['order_status'=>$data['order_status']]);
 $order = Order::select('user_email')->where('id',$data['order_id'])->first();
 // $productDetails = Order::with('orders')->where('id',$order_id)->first()->toArray();
  $email = $order['user_email'];
Mail::send(['text'=>'mail'],$data, function($message) use($email) {
       $message->to($email, 'Tutorials Point')->subject
          ('Laravel Basic Testing Mail');
       $message->from('xyz@gmail.com','Virat Gandhi');
    });
return redirect()->route('admin.order.view')->with('flash_message_success','Order Status has been update successfully !!');
   }
 }



 public function viewOrdersMonthCharts()
 {
   $current_month_orders = Order::whereYear('created_at',Carbon::now()->year)
                         ->whereMonth('created_at',Carbon::now()->month)->count();
  $last_month_orders = Order::whereYear('created_at',Carbon::now()->year)
                         ->whereMonth('created_at',Carbon::now()->subMonth(1))->count();
  $last_to_last_month_orders = Order::whereYear('created_at',Carbon::now()->year)
                       ->whereMonth('created_at',Carbon::now()->subMonth(2))->count();




   return view('admin.ordersCharts.view_orders_monthly_charts',compact('current_month_orders','last_month_orders','last_to_last_month_orders'));
 }

 public function viewOrdersDailyCharts()
 {
   $day1_orders = Order::whereMonth('created_at',Carbon::now()->month)
                         ->whereDay('created_at',Carbon::now()->day)->count();
  $day2_orders = Order::whereMonth('created_at',Carbon::now()->month)
                         ->whereDay('created_at',Carbon::now()->subDay(1))->count();
  $day3_orders = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(2))->count();
   $day4_orders = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(3))->count();
  $day5_orders = Order::whereMonth('created_at',Carbon::now()->month)
                       ->whereDay('created_at',Carbon::now()->subDay(4))->count();
  $day6_orders = Order::whereMonth('created_at',Carbon::now()->month)
                     ->whereDay('created_at',Carbon::now()->subDay(5))->count();
   $day7_orders = Order::whereMonth('created_at',Carbon::now()->month)
                        ->whereDay('created_at',Carbon::now()->subDay(6))->count();




   return view('admin.ordersCharts.view_orders_daily_charts',compact('day1_orders','day2_orders','day3_orders','day4_orders','day5_orders','day6_orders','day7_orders'));
 }


 public function viewOrdersYearCharts()
 {

  $last_to_last_year_orders = Order::whereYear('created_at',Carbon::now()->subYear(2))->count();

 $last_year_orders = Order::whereYear('created_at',Carbon::now()->subYear(1))->count();
  $current_year_orders = Order::whereYear('created_at',Carbon::now()->year)->count();



   return view('admin.ordersCharts.view_orders_yearly_charts',compact('current_year_orders','last_year_orders','last_to_last_year_orders'));
 }

 public function viewProductCharts()
 {
   $current_month_orders = Order::whereYear('created_at',Carbon::now()->year)
                         ->whereMonth('created_at',Carbon::now()->month)->count();
  $last_month_orders = Order::whereYear('created_at',Carbon::now()->year)
                         ->whereMonth('created_at',Carbon::now()->subMonth(1))->count();
  $last_to_last_month_orders = Order::whereYear('created_at',Carbon::now()->year)
                       ->whereMonth('created_at',Carbon::now()->subMonth(2))->count();




   return view('products.detail',compact('current_month_orders','last_month_orders','last_to_last_month_orders'));
 }

}
