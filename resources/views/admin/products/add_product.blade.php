@extends('layouts.adminLayout.admin_design')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">Add Product</a> </div>
    <h1>Products</h1>
      @include('errorMessage.message')
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Product</h5>

          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{route('admin.product.add')}}" name="add_product" id="add_product" novalidate="novalidate" enctype="multipart/form-data">
             @csrf

             <div class="control-group">
              <label class="control-label">Under Category</label>
              <div class="controls">
                <select name="category_id" id="category_id"  style="width: 220px">
                <?php echo $categories_dropdown ; ?>

                </select>
              </div>
            </div>

            <div class="control-group">
             <label class="control-label">Brand Name</label>
             <div class="controls">
               <select name="brand_id" id="brand_id"  style="width: 220px">
                 <option value="" >Select Brand</option>
                 <option value="0" >No Brand</option>

                  @foreach($brands as $brand)

                  <option value="{{$brand->id}}" >{{$brand->name}}</option>
                  @endforeach

               </select>
             </div>
           </div>

              <div class="control-group">
                <label class="control-label">Product Name</label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Product Code</label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code">
                </div>
              </div>
              <div class="control-group">
              <label class="control-label">Product Flavor</label>
              <div class="controls">
                <input type="text" name="product_color" id="product_color">
              </div>
            </div>
              <div class="control-group">
                <label class="control-label">Buying Price</label>
                <div class="controls">
                  <input type="text" name="buying_price" id="buying_price">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Selling Price</label>
                <div class="controls">
                  <input type="text" name="selling_price" id="selling_price">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Special price</label>
                <div class="controls">
                  <input type="text" name="special_price" id="special_price">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Special price start</label>
                <div class="controls">
                  <input type="date" name="special_start" id="special_start">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Special price end</label>
                <div class="controls">
                  <input type="date" name="special_end" id="special_end">
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea type="text" name="description" id="description"></textarea>

                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Nutritional Info</label>
                <div class="controls">
                  <textarea type="text" name="long_description" id="long_description"></textarea>

                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Feeding Instructions</label>
                <div class="controls">
                  <input type="text" name="feeding" id="feeding" >
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Product Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                </div>
              </div>

               <div class="control-group">
                <label class="control-label">Product Thumbanil</label>
                <div class="controls">
                  <input type="file" name="thumbanil[]" multiple>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Feature Item</label>
                <div class="controls">
                  <input type="checkbox" name="feature_item" id="feature_item" value="1">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Enable</label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>


              <div class="form-actions">
                <input type="submit" value="Add Product" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection
