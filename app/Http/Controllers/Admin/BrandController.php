<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Brand;
use File;

class BrandController extends Controller
{
  public function index()
  {
    $brands = Brand::OrderBy('id','Desc')->get();
    return view('admin.brand.index',compact('brands'));
  }
  public function create(Request $request)
  {
        // print_r($request);die();
    $this->validate($request,[
      'name'=>'required',
      'logo' =>'required'
    ]);
    $brand = new Brand();
    $brand->name = $request->name;
    $uploadImage = time().'.'.$request->logo->extension();
    $request->logo->move(public_path('admin/brand'),$uploadImage);
    $brand->logo = $uploadImage;
  // print_r($brand);die();
    $brand->save();
    return back();
  }
  public function updateStatus($id, $status)
{

    $brand = Brand::find($id);
    $brand->status = $status;
    $brand->save();

}
public function update(Request $request, $id)
{
  $brand = Brand::find($id);
  $brand->name = $request->name;
  if ($request->logo) {
   if (File::exists('admin/brand/'.$brand->logo)) {
     File::delete('admin/brand/'.$brand->logo);
   }

 $uploadIage = time().'.'.$request->logo->extension();
 $request->logo->move(public_path('admin/brand/'), $uploadIage);
 $brand->logo = $uploadIage;
}

  $brand->save();
  return back();

}

public function delete($id)
{
  $brand = Brand::find($id);
  if (!is_null($brand)) {
    if (File::exists(public_path('admin/brand/').$brand->logo)) {
      File::delete(public_path('admin/brand/').$brand->logo);
    }
  }
  $brand->delete();
  return back();
}

}
