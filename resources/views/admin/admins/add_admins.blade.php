@extends('layouts.adminLayout.admin_design')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Admins/Sub Admins</a> <a href="#" class="current">Add Admin/Sub Admin</a> </div>
    <h1>Admins/ Sub Admin</h1>
      @include('errorMessage.message')
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Admin/Sub Admin</h5>

          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{route('admin.addAdmins')}}" name="add_admin" id="add_admin" novalidate="novalidate">
             @csrf

             <div class="control-group">
               <label class="control-label">Type</label>
               <div class="controls">
                <select name="type" id="type" style="width: 220px">
                  <option value="Admin">Admin</option>
                  <option value="Sub Admin">Sub Admin</option>
                </select>
               </div>
             </div>
              <div class="control-group">
                <label class="control-label">Username</label>
                <div class="controls">
                  <input type="text" name="username" id="username">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="password" name="password" id="password">
                </div>
              </div>

              <div class="control-group" id="access">
              <label class="control-label">Access</label>
              <div class="controls">
                <input type="checkbox" name="categories_access" id="categories_access" value="1" style="margine-top:-3px;">&nbsp;Categories &nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="products_access" id="products_access" value="1" style="margine-top:-3px;">&nbsp;Products &nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="orders_access" id="orders_access" value="1" style="margine-top:-3px;">&nbsp;Orders &nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="users_access" id="users_access" value="1" style="margine-top:-3px;">&nbsp;Users &nbsp;&nbsp;&nbsp;

              </div>
            </div>

            <div class="control-group">
            <label class="control-label">Enable</label>
            <div class="controls">
              <input type="checkbox" name="status" id="status" value="1">
            </div>
          </div>

              <div class="form-actions">
                <input type="submit" value="Add Admin" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
