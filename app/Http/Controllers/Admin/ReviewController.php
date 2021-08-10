<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductReview;
use App\User;


class ReviewController extends Controller
{
  public function view()
  {
  $review = ProductReview::get();
  return view('admin.review.view_review',compact('review'));
  }


  public function edit(Request $request,$id)
  {

    if ($request->isMethod('post')) {
      $data = $request->all();
      // echo "<pre>"; print_r($data); die;
      if (empty($data['status'])) {
       $status ='0';
     }else {
       $status ='1';
     }




      ProductReview::where(['id'=>$id])->update(['status'=>$status,'name'=>$data['name'],'title'=>$data['title'],'message'=>$data['message']]);

        return redirect()->route('admin.review.view')->with('flash_message_success',' Question has update Successfully');

    }
      $reviewDetails = ProductReview::where(['id' =>$id])->first();
    return view('admin.review.edit_review',compact('reviewDetails'));
  }


  public function delete($id = null)
  {
      if (!empty($id)) {
      ProductReview::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success',' Question delete Successfully');
      }
  }



}
