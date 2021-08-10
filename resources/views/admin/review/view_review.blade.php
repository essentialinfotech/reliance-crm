@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">View Product</a> </div>
    <h1>Review Product</h1>
    @include('errorMessage.message')
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Review</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No:</th>
                  <th>User Name</th>
                  <th>User Email</th>

                  <th>Review Title</th>
                  <th>Review Message</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                  @foreach($review as $view)
                <tr class="gradeX">
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{$view->name}}</td>
                  <td>{{$view->email}}</td>
                  <td>{{$view->title}}</td>

                  <td>{{$view->message}}</td>
                  <td>{{$view->status}}</td>

                  <td >

                    <a href="{{route('admin.review.edit',$view->id)}}" class="btn btn-primary btn-mini">Edit</a>
                   
                   <a id="delProduct" href="{{route('admin.review.delete',$view->id)}}" class="btn btn-danger btn-mini">Delete</a>

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
