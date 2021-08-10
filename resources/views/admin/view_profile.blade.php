@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  <a href="#" class="current"> Settings</a> </div>
    <h1>Admin Settings</h1>
      @include('errorMessage.message')
  </div>
  <div class="container-fluid"><hr>

    <div class="row-fluid">

      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Update Password</h5>
            </div>
            <div class="widget-content nopadding">
              <form class="form-horizontal" method="post" action="" name="password_validate" id="password_validate" novalidate="novalidate">
                @csrf
                <div class="control-group">
                  <label class="control-label">UserName</label>
                  <div class="controls">
                    <input type="text" name="username" value="{{$adminDetails->username}}">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Admin Type</label>
                  <div class="controls">
                    <input type="text" name="type" id="type" value="{{$adminDetails->type}}" />
                    <span id="chkPwd"></span>
                  </div>
                </div>
 
                {{-- <div class="form-actions">
                  <input type="submit" value="Update profile" class="btn btn-success">
                </div> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
