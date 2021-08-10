<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductAttribute;
use App\Coupon;
use App\User;
use App\Answer;
use App\Question;


class AnswerController extends Controller
{
    public function view()
    {
    $question_answer = Question::get();
    return view('admin.question.view_question',compact('question_answer'));
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




        Question::where(['id'=>$id])->update(['status'=>$status,'message'=>$data['message']]);

          return redirect()->route('admin.Answers.view')->with('flash_message_success',' Question has update Successfully');

      }
        $questionDetails = Question::where(['id' =>$id])->first();
      return view('admin.question.edit_question',compact('questionDetails'));
    }


    public function delete($id = null)
    {
        if (!empty($id)) {
        Question::where(['id'=>$id])->delete();
          return redirect()->back()->with('flash_message_success',' Question delete Successfully');
        }
    }


    public function addAnswer(Request $request,$id=null)
    {
    $questionDetails = Question::with('answer')->where(['id'=>$id])->first();
 // $questionDetails = json_decode(json_encode($questionDetails));
 //   echo "<pre>";print_r($questionDetails); die;
  if($request->isMethod('post')) {
    $data = $request->all();
   // echo "<pre>";print_r($data); die;



        $answer = new Answer;
        $answer->question_id =$id;
        $answer->answer =$data['answer'];

        $answer->save();



    return redirect('/admin/question/add-answer/'.$id)->with('flash_message_success',' Product Attribute Add Successfull');
  }

      return view('admin.question.answer',compact('questionDetails'));
    }

    public function editAnswer(Request $request,$id=null)
    {
    $questionDetails = Question::with('answer')->where(['id'=>$id])->first();
 // $questionDetails = json_decode(json_encode($questionDetails));
 //   echo "<pre>";print_r($questionDetails); die;
  if($request->isMethod('post')) {
    $data = $request->all();
   // echo "<pre>";print_r($data); die;



        $answer = new Answer;
        $answer->question_id =$id;
      

        $answer->save();



    return redirect('/admin/question/add-answer/'.$id)->with('flash_message_success',' Product Attribute Add Successfull');
  }

      return view('admin.question.edit_answer',compact('questionDetails'));
    }
}
