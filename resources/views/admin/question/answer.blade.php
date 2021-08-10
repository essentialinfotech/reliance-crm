@extends('layouts.adminLayout.admin_design')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">Add Product Attributes</a> </div>
    <h1>Attributes</h1>
      @include('errorMessage.message')
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Question Answer</h5>

          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{route('admin.question.addanswer', $questionDetails->id)}}" name="add_attribute" id="add_attribute" novalidate="novalidate" enctype="multipart/form-data">
             @csrf
             <input type="text" class="hidden" name="question_id" id="question_id" value="{{$questionDetails->id}}">

              <div class="control-group">
                <label class="control-label">Question</label>
                  <label class="control-label"><strong>{{$questionDetails->message}}</strong></label>
              </div>
              <div class="control-group">
                <label class="control-label">Name</label>
            <label class="control-label"><strong>{{$questionDetails->name}}</strong></label>
              </div>


              <div class="control-group">
                <label class="control-label"></label>

                <div class="field_wrapper">
                  <div>
                    <textarea name="answer" rows="8" cols="80"></textarea>
                  </div>
              </div>

              </div>

              <div class="form-actions">
                <input type="submit" value="Add Answer" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



  <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Product Attributes</h5>
          </div>
          <div class="widget-content nopadding">
            <form method="post" action="{{url('admin/question/edit-answer/'.$questionDetails->id)}}">
              @csrf
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No:</th>
                  <th>Answer</th>

                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                  @foreach($questionDetails['answer'] as $answers)
                <tr class="gradeX">
                   <td><input type="hidden" name="idAttr[]" value="{{$answers->id}}">{{$answers->id}}</td>
                   <td>{{$answers->answer}}</td>


                    <td class="center">
                      <input type="submit" name="submit" class="btn btn-success  btn-mini" value=" Update">


                  <a rel="{{$answers->id}}" rel1="delete_attribut" href="javascript:" class="btn btn-danger btn-mini">Delete</a>

                      </td>
                </tr>
           @endforeach
              </tbody>

            </table>
          </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
