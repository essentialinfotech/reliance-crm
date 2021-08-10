@extends('layouts.frontLayout.front_design')

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
    <section class="user-info-landing mt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="d-none col-md-3 col-sm-6 d-md-block d-sm-none notify">
            <h4>Hi User</h4>
            <a href="#">View pet profile</a>
          </div>
          <div class="col-md-3 col-sm-6 col-6 notify">
            <h4>Save 30% Today</h4>
            <a href="#">Set up Autoship</a>
          </div>
          <div class="col-md-3 col-sm-6 col-6 notify">
            <h4>Recent Orders</h4>
            <a href="#">Write a review</a>
          </div>
          <div class="d-none col-md-3 col-sm-6 d-md-block d-sm-none notify">
            <h4>Chewy Pharmacy</h4>
            <a href="#">Shop Now</a>
          </div>
        </div>
      </div>
    </section>

    <section class="customer-favourites mt-4">
      <div class="container">
        <h2>Customer Favourites</h2>
         
        <div class="row">
          @foreach(App\Category::orderBy('id','asc')->where('parent_id',0)->get() as $parent)
          @foreach(App\Category::orderBy('id','asc')->where('parent_id',$parent->id)->get() as $child)
          <div class="col-md-2 col-sm-3 mt-2">

            <div class="card">
              <a style="text-decoration: none" href="{{asset('products/'.$parent->url)}}">
              <img class="card-img-top" src="{{asset('images/backend_images/categories/medium/'.$child->image)}}" />
              <div class="card-body " style="text-decoration: none !important">
               {{$parent->name}} {{$child->name}} 
              </div>
            </a>
            </div>
             
          </div>
           @endforeach
        @endforeach
        </div>
       
      </div>
    </section>

    <section class="all-brands mt-4">
      <div class="container">
        <h2>{{$allBrands}}+ Brands in Stock!</h2>
        <a href="{{route('frontend.brand.show')}}">Shop All</a>
        <div class="row">
          @foreach($brands as $brand )
          <div class="col-md-2 col-sm-3 mt-2">
            <a href="{{asset('/'.$brand->url)}}">
               <div class="card">
              <img class="card-img-top" src="{{asset('admin/brand/'.$brand->logo)}}" />
            </div>
            </a>
           
          </div>
          @endforeach
        </div>
      </div>
    </section>
<!-- 
    <section class="autoship-save mt-4">
      <div class="container">
        <h2>Extra 5% Off with Autoship &amp; Save</h2>
        <a href="#">Learn More</a>
        <div class="row mt-3">
          <div id="autoship-save" class="owl-carousel owl-loaded">
            <div class="owl-stage-outer">
              <div class="owl-stage">
                <div class="owl-item">
                  <div class="card">
                    <img
                      class="card-img-top"
                      src="img/products/product-1.png"
                    />
                    <div class="card-body text-center">
                      <a href="#" class="card-text"> Dog Food </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="exclusives mt-4">
      <div class="container">
        <h2>Discover Chewy Exclusives</h2>
        <div class="row mt-3">
          <div id="exclusives" class="owl-carousel owl-loaded">
            <div class="owl-stage-outer">
              <div class="owl-stage">
                <div class="owl-item">
                  <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product mt-2">
                      <img src="https://i.imgur.com/3VTaSeb.png" width="300" />
                      <div>
                        <h5>Product Name here</h5>
                        <h6 class="mt-0 text-black-50">
                          Product Description here
                        </h6>
                        <p class="product-offer">Buy 1 Get 1</p>
                      </div>
                    </div>

                    <div
                      class="d-flex justify-content-between total font-weight-bold"
                    >
                      <span>Price</span><span>$7,197.00</span>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="daily-picks mt-4">
      <div class="container">
        <h4>Top Picks</h4>
        <a href="#">Shop All</a>
        <div class="row mt-3">
          <div id="dailyPicks" class="owl-carousel owl-loaded">
            <div class="owl-stage-outer">
              <div class="owl-stage">
@foreach($fev_products as $fev_product)
                <div class="owl-item">
                   
                  <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <a style="text-decoration: none"  href="{{route('frontend.product',$fev_product->id)}}">
                    <div class="about-product mt-2">
                      <img src="{{asset('images/backend_images/products/medium/'.$fev_product->image)}}" width="300" />
                      <div>
                        <h5>{{$fev_product->product_name}}</h5>
                        <h6 class="mt-0 text-black-50">
                         
                        </h6>
                        <p class="product-offer"></p>
                      </div>
                    </div>
                  </a>

                    <div
                      class="d-flex justify-content-between total font-weight-bold"
                    >
                      <span>Price</span><span>${{$fev_product->selling_price}}</span>
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
                  </div>
                  
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="extra-banner mt-4">
      <div class="container">
        <a href="">
          <img style="width: 100%" src="img/slider-1.jpg" alt="" />
        </a>
      </div>
    </section>

    <section class="top-brands">
      <div class="container">
        <h4>More Popular Brands</h4>
        <a href="{{route('frontend.brand.show')}}">Shop All</a>
        <div class="row">
          @foreach($topbrands as  $topbrand)
          <div class="col-md-2 col-sm-4 col-6">
            <a href="{{asset('/'.$topbrand->url)}}">
              <img src="{{asset('admin/brand/'.$topbrand->logo)}}" alt="" srcset="" />
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>

   <!--  <section class="new-pet">
      <div class="container">
        <h4>New Puppy or Kitten?</h4>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <a href="#">
              <img src="img/new/Puppy_2x_v3.jpg" alt="" />
            </a>
          </div>
          <div class="col-md-6 col-sm-12">
            <a href="#">
              <img src="img/new/Puppy_2x_v3.jpg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section> -->

    @endsection