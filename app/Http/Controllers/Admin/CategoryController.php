<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Image;

class CategoryController extends Controller
{


    public function add(Request $request)
    {
      if ($request->isMethod('post')) {
        $data = $request->all();
       // echo "<pre>"; print_r($data); die;
        if (empty($data['status'])) {
          $status =0;
        }else {
          $status = 1;
        }
        $category = new Category;
        $category->name =$data['name'];
        if ($request->hasFile('image')) {
        $image_tmp = $request->file('image');
        if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename=rand(111,99999).'.'.$extension;
        $large_image_path = 'images/backend_images/categories/large/'.$filename;
        $medium_image_path = 'images/backend_images/categories/medium/'.$filename;
        $small_image_path = 'images/backend_images/categories/small/'.$filename;

        Image::make($image_tmp)->resize(600,600)->save($large_image_path);
        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
        Image::make($image_tmp)->resize(20,20)->save($small_image_path);
           $category->image =$filename;
        }
        }
        $category->parent_id =$data['parent_id'];
        $category->description =$data['description'];
        $category->url =$data['url'];
          $category->status =$status;
        $category->save();
        return redirect()->route('admin.category.view')->with('flash_message_success',' Category Add Successfully');
      }
      $levels = Category::where(['parent_id'=>0])->get();
      return view('admin.categories.add_category',compact('levels'));
    }
    public function edit(Request $request,$id=null)
    {

      if ($request->isMethod('post')) {
        $data = $request->all();
         // echo "<pre>"; print_r($data); die;

         if ($request->hasFile('image')) {
         $image_tmp = $request->file('image');
         if ($image_tmp->isValid()) {
         $extension = $image_tmp->getClientOriginalExtension();
         $filename=rand(111,99999).'.'.$extension;
         $large_image_path = 'images/backend_images/categories/large/'.$filename;
         $medium_image_path = 'images/backend_images/categories/medium/'.$filename;
         $small_image_path = 'images/backend_images/categories/small/'.$filename;

         Image::make($image_tmp)->save($large_image_path);
         Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
         Image::make($image_tmp)->resize(20,20)->save($small_image_path);
   }
       }else if(!empty($data['current_image'])) {
           $filename = $data['current_image'];
       }else{
         $filename ='';
       }
         if (empty($data['status'])) {
           $status =0;
         }else {
           $status = 1;
         }
        Category::where(['id'=>$id])->update(['parent_id'=>$data['parent_id'],'name'=>$data['name'],'description'=>$data['description'],'url'=>$data['url'],'status'=>$status,'image'=>$filename]);

          return redirect()->route('admin.category.view')->with('flash_message_success',' Category update Successfully');

      }
          $categoryDetails = Category::where(['id' =>$id])->first();
          $levels = Category::where(['parent_id'=>0])->get();
          return view('admin.categories.edit_category',compact('categoryDetails','levels'));
    }

      public function delete($id = null)
      {
          if (!empty($id)) {
          Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success',' Category delete Successfully');
          }
      }

    public function view()
    {
      $categories = Category::orderBy('id','desc')->get();
      return view('admin.categories.view_category',compact('categories'));
    }
}
