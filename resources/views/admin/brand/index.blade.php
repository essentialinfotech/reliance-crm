@extends('layouts.adminLayout.admin_design')
@section('title')
Brand | DrollyPets
@endsection
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">Add Category</a> </div>
    <h1>Categories</h1>
      @include('errorMessage.message')
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Brand</h5>
            <div class="card-header text-right">
<a type="button" class="btn btn-wide btn-primary text-right" data-toggle="modal" data-target="#md-modal">Add Brand</a>
            </div>

          </div>
          <div class="widget-content nopadding">
            <div class="modal fade" id="md-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header state modal-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modal-default-label">Add Brand</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <form id="brand-crate-validation" class="form-horizontal form-stripe" method="post" action="{{route('brand.create')}}" enctype="multipart/form-data">
                                    @csrf
                                      <div class="form-group">
                                          <label for="name" class="col-sm-3 control-label">Brand Name<span class="required">*</span></label>
                                          <div class="col-sm-9">
                                              <input type="text" class="form-control" id="name" name="name" required>
                                          </div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                          <label for="logo" class="col-sm-3 control-label">Brand Logo<span class="required">*</span></label>
                                          <div class="col-sm-9">
                                              <input type="file" class="form-control" id="logo" name="logo" required>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-sm-offset-3 col-sm-9">
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal End -->


                                <div class="table-responsive table-bordered">
                                    <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Brand Name</th>
                                            <th>Brand Logo</th>
                                            <th>Top Brand</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($brands as $brand )
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$brand->name}}</td>
                                            <td>
                                              <img src="{{asset('admin/brand/'.$brand->logo)}}" style="width: 60px;height: 50px" alt="">
                                            </td>
                                            <td>{{$brand->top_brand}}</td>
                                            <td>
                                              <input type="checkbox" {{$brand->status == 'active' ? 'checked' :''}} id="brandStatus" data-id="{{$brand->id}}" data-toggle="toggle"  data-on="Active" data-off="Inactive" data-size="small" data-offstyle="danger">
                                            </td>
                                            <td>

                                            <a href="#editModal{{$brand->id}}" data-toggle="modal" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="#deleteModal{{$brand->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>

                                            <!-- Delete Brand -->
                                            <div class="modal fade" id="deleteModal{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default-label">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header state modal-primary">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="modal-default-label">Are you sure you want to delete Brand ??</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                          <div class="row">
                                                              <div class="col-md-12">
                                                                  <form id="brand-crate-validation" class="form-horizontal form-stripe" method="post" action="{{route('brand.delete',$brand->id)}}" enctype="multipart/form-data">
                                                                    @csrf


                                                                      <div class="form-group">
                                                                          <div class="col-sm-offset-3 col-sm-9">
                                                                              <button type="submit" class="btn btn-primary">Parmanent Delete</button>
                                                                          </div>
                                                                      </div>
                                                                  </form>
                                                              </div>
                                                          </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Delete Brand -->
                                            <div class="modal fade" id="editModal{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header state modal-primary">

                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                                <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to Edit ?</h5>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="{{route('brand.update',$brand->id) }}"  method="post" class="form-horizontal" enctype="multipart/form-data"  >
                                                                                    @csrf

                                                                                    <div class="form-group">
                                                                                        <label for="category_id" class="col-sm-4 control-label">Brand Name</label>
                                                                                        <div class="col-sm-8">
                                                                                      <input type="text" class="form-control" id="name" name="name" value="{{$brand->name}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <br>

                                                                                   <div class="form-group">
                                                                                       <label for="name" class="col-sm-3 control-label">Brand Logo </label>

                                                                                       <div class="col-sm-9">
                                                                                          <input type="file" class="form-control" id="logo" name="logo" >
                                                                                       </div>
                                                                                   </div>



                                                                                   <div class="modal-footer">
                                                                                       <button type="submit" class="btn btn-success" >Update</button>
                                                                                       <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                                                                   </div>

                                                                                </form>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

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
</div>



@endsection
