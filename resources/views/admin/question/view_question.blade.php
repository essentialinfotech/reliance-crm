@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">View Product</a> </div>
    <h1>View Product</h1>
    @include('errorMessage.message')
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Question & Answer</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No:</th>
                  <th>User Name</th>
                  <th>User Email</th>

                  <th>Question</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                  @foreach($question_answer as $question)
                <tr class="gradeX">
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{$question->name}}</td>
                  <td>{{$question->user->email}}</td>

                  <td>{{$question->message}}</td>
                  <td>{{$question->status}}</td>

                  <td >

                    {{-- <a href="{{route('admin.question.edit',$question->id)}}" class="btn btn-primary btn-mini">Edit</a> --}}
                    <a href="{{route('admin.question.addanswer',$question->id)}}"  class="btn btn-success btn-mini" title="Add Attributes">Add</a>  <a id="delProduct" href="{{route('admin.question.delete',$question->id)}}" class="btn btn-danger btn-mini">Delete</a>

                    </td>
                </tr>


  @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
