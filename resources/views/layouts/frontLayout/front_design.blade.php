
<?php
use App\Http\Controllers\Controller;
$mainCategories = Controller::mainCategories();
use App\Product;
$cartCount = Product::cartCount();

 ?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="keywords"
      content="htmlcss bootstrap menu, navbar, mega menu examples"
    />
    <meta
      name="description"
      content="Bootstrap navbar examples for any type of project, Bootstrap 4"
    />

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  --> 
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jQuery -->
   <!--  <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"
    ></script> -->

    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
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
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}" />


    <script type="text/javascript">
      /// some script

      // jquery ready start
      $(document).ready(function () {
        // jQuery code

        //////////////////////// Prevent closing from click inside dropdown
        $(document).on("click", ".dropdown-menu", function (e) {
          e.stopPropagation();
        });
      }); // jquery end
    </script>

    <style type="text/css">
      @media all and (min-width: 992px) {
        .navbar {
          padding-top: 0;
          padding-bottom: 0;
        }
        .navbar .has-megamenu {
          position: static !important;
        }
        .navbar .megamenu {
          left: 0;
          right: 0;
          width: 100%;
          padding: 20px;
        }
        .navbar .nav-link {
          padding-top: 1rem;
          padding-bottom: 1rem;
        }
      }
    </style>

  
  
  </head>
  <body >
    <nav class="navbar navbar-expand-lg navbar-dark nav-bg sticky-top">
      <div class="container">
        <button
          class="navbar-toggler left-btn"
          type="button"
          data-toggle="collapse"
          data-target="#main_nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"
            ><i class="fas fa-ellipsis-v"></i
          ></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{asset('frontend/4.png')}}" alt="" srcset="" />
        </a>
        <button
          class="navbar-toggler right-btn"
          type="button"
          data-toggle="collapse"
          data-target="#account_nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"
            ><i class="fas fa-shopping-bag"></i
          ></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav mx-auto w-100">
            <form action="{{route('user.searchProducts')}}" method="post">
              @csrf
              <li class="nav-item dropdown">
           <div class="container box">
   
             <div class="form-group">
              <input type="text" name="serach" id="serach" class="form-control input-lg" placeholder="Enter Product Name" style="width: 500px"/>
              <div id="productlist">
              </div>
              
             </div>
             <button type="submit" style="border:0px;height: 33px;margin-left: 3px">Go</button>
            </div>
            
              </li>
          </form>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="account_nav">
          <ul class="navbar-nav ml-auto">
           
             <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
              >
                Account
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                 @if(empty(Auth::check()))
                <li><a class="dropdown-item" href="{{route('user.user_login_form')}}"> Login</a></li>
                <li><a class="dropdown-item" href="{{route('user.register')}}"> New User Register </a></li>
                @else
                <li><a class="dropdown-item" href="{{route('cart')}}"> Cart ({{ $cartCount}})</a></li>
                <li><a class="dropdown-item" href="{{route('user.user_account')}}"> Account </a></li>
                <li><a class="dropdown-item" href="{{route('user.user_logout')}}"> Logout</a></li>
               
                @endif
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href=""
                data-toggle="dropdown"
              >
             Cart
                
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="{{route('cart')}}"> Cart ({{ $cartCount}})</a></li>
                <!-- <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li> --> 
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark nav-bg">
      <div class="container">
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item dropdown has-megamenu">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
              >
                Shop
              </a>
              <div class="dropdown-menu megamenu" role="menu">
                <div class="container">
                  <div class="row">
                  	@foreach(App\Category::orderBy('name','asc')->where('parent_id',0)->get() as $parent)
                    <div class="col">
                    	
                      <div class="col-megamenu">
                        <h6 class="title">{{$parent->name}}</h6>
                        @foreach(App\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
                        <ul class="list-unstyled">
                          <li><a  href="{{asset('products/'.$child->url)}}">{{$child->name}}</a></li>
                        
                        </ul>
                        @endforeach
                      </div>
                    
                      <!-- col-megamenu.// -->
                    </div>
                      @endforeach
                  
                  </div>
                </div>
                <!-- end row -->
              </div>
              <!-- dropdown-mega-menu.// -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Services </a>
            </li>
          </ul>
        </div>
      </div>
    </nav >


@yield('content')

@stack('custom-scripts')


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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
></script>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"
></script>
    

<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
      <script>
      $("#banner-slider").owlCarousel({
        loop: true,
        dots: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false,
          },
          600: {
            items: 1,
            nav: false,
          },
          1000: {
            items: 1,
            nav: false,
            loop: false,
          },
        },
      });

      $("#autoship-save").owlCarousel({
        loop: true,
        dots: false,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 2,
          },
          600: {
            items: 4,
          },
          1000: {
            items: 6,
            nav: true,
            navText: [
              "<i class='fa fa-chevron-left'></i>",
              "<i class='fa fa-chevron-right'></i>",
            ],
          },
        },
      });

      $("#exclusives").owlCarousel({
        loop: true,
        dots: false,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 2,
          },
          600: {
            items: 4,
          },
          1000: {
            items: 6,
            nav: true,
            navText: [
              "<i class='fa fa-chevron-left'></i>",
              "<i class='fa fa-chevron-right'></i>",
            ],
          },
        },
      });

      $("#dailyPicks").owlCarousel({
        loop: true,
        dots: false,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 2,
          },
          600: {
            items: 4,
          },
          1000: {
            items: 6,
            nav: true,
            navText: [
              "<i class='fa fa-chevron-left'></i>",
              "<i class='fa fa-chevron-right'></i>",
            ],
          },
        },
      });
    </script>


  <script>
$(document).ready(function(){

 $('#serach').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            $('#productlist').fadeIn();  
                    $('#productlist').html(data);
          }
         });
        }
    });

     $(document).on('click', '#search', function(){  
         $('#serach').val($(this).text());  
         $('#productlist').fadeOut();  
     });  

});
</script>

  </body>
</html>
