
@extends('layouts.frontLayout.front_design')
@push('plugin-styles')
<link
  rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
  crossorigin="anonymous"
/>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" />
  <link
    rel="stylesheet"
    href="{{asset('frontend/css/owl.theme.default.min.css')}}"
  />
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
@endpush
@section('content')
<section class="banner">
    
  <div id="banner-slider" class="owl-carousel">
    @foreach($banners as $key => $banner)
    <div class="item">
      <img src="{{asset('images/backend_images/banners/'.$banner->image)}}" alt="" srcset="" />
    </div>
 @endforeach
  </div>
  <div class="owl-dots">
    <div class="owl-dot active"><span></span></div>
    <div class="owl-dot"><span></span></div>
    <div class="owl-dot"><span></span></div>
  </div>
</section>
<section class="search-and-filter">
      <div class="container" style="margin-bottom: 100px">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-12">
            <h4>Felter By</h4>
            <div class="row">
            @include('layouts.frontLayout.front_sidebar')
          </div>
        </div>

          <div class="col-lg-10 col-md-8 col-sm-12">
            <div class="filter-result">
              <div class="row">
                <div class="col-md-8 col-6">
                  <h4>  ({{count($productsAll)}})</h4>
                  <p class="text-black-50"> <?php echo $breadcrumb; ?>({{count($productsAll)}})</p>
                </div>
                <div class="col-md-4 col-6">
                  <h5>Sort By</h5>
                  <form action="" class="form-group" name="sortProduct" id="sortProduct">
                    <select class="form-control" name="sort" id="sort">
                      <option value="">Select</option>
                        <option value="product_latest" @if(isset($_GET['sort']) && $_GET['sort'] =="product_latest") selected @endif>Latest Product</option>
                      <option value="Product_name_a_z" @if(isset($_GET['sort']) && $_GET['sort'] =="Product_name_a_z") selected @endif>Product name A-Z</option>
                      <option value="Product_name_z_a" @if(isset($_GET['sort']) && $_GET['sort'] =="Product_name_z_a") selected @endif>Product name Z- A</option>
                      <option value="pricelowtohigh" @if(isset($_GET['sort']) && $_GET['sort'] =="pricelowtohigh") selected @endif>
                        price - low to high
                      </option>
                      <option value="pricehightolow" @if(isset($_GET['sort']) && $_GET['sort'] =="pricehightolow") selected @endif>
                        price - high to low
                      </option>

                    </select>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">

              @if($productsAll->isEmpty())
                <h1 class="text-center text-danger">Product Not Found
                @else

                @foreach($productsAll as $product)
              <div class="col-md-4 col-sm-2">
                <div class="card p-3">
                  <i class="fa fa-apple"></i>
                  <a href="{{route('frontend.product',$product->id)}}">
                    <div class="about-product mt-2 product">
                      <img src="{{asset('images/backend_images/products/medium/'.$product->image)}}" width="300" />
                      <div>
                        @php($sPrice = false)
                      @if($product->special_start <= date('Y-m-d') && $product->special_end >= date('Y-m-d'))
                      @php($sPrice = true)
                      @endif
                        <h5>{{$product->product_name}}</h5>
                        <h6 class="mt-0 text-black-50">
                          {{$product->brand->name}}
                        </h6>
                        <p class="product-offer">Buy 1 Get 1</p>
                      </div>
                    </div>

                    <div
                      class="d-flex justify-content-between total font-weight-bold"
                    >
                      <span>Regular</span><span><del>${{ $sPrice ? $product->selling_price:$product->special_price}}</del> </span>
                    </div>
                    <div
                      class="d-flex justify-content-between total font-weight-bold"
                    >
                    @if($sPrice)
                      <span>Sale</span><span>${{$product->special_price}}</span>
                      @endif
                    </div>
                    <div
                      class="available_line d-flex flex-row justify-content-start"
                    >
                      <div class="sold_stars ml-auto">
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              @endforeach
              @endif


            </div>
          </div>
        </div>
      </div>
    </section>



@endsection

@push('plugin-scripts')

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"
></script>
<script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"
></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/index.js')}}"></script>

@endpush
