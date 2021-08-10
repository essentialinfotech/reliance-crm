@extends('layouts.frontLayout.front_design')
<!-- @push('plugin-styles')
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
@endpush -->
@section('content')
<section class="brands-all mt-4" >
        <h2 class="text-center">Shop by Brands</h2>
      <div class="container">
        <div class="row">
          @foreach($brands as $brand)
          <div class="col-md-2 col-sm-3 col-6 mt-2">
            <div class="card mb-4">
              <a href="{{asset('/'.$brand->url)}}">  <img class="card-img-top" src="{{asset('admin/brand/'.$brand->logo)}}" /></a>


            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <section class="by-alpha" style="margin-bottom: 100px">
        <div class="container">
            <div class="row">
                <div class="col"><a href="">All</a></div>
                <div class="col"><a href="">A</a></div>
                <div class="col"><a href="">B</a></div>
                <div class="col"><a href="">C</a></div>
                <div class="col"><a href="">D</a></div>
                <div class="col"><a href="">E</a></div>
                <div class="col"><a href="">F</a></div>
                <div class="col"><a href="">G</a></div>
                <div class="col"><a href="">H</a></div>
                <div class="col"><a href="">I</a></div>
                <div class="col"><a href="">J</a></div>
                <div class="col"><a href="">K</a></div>
                <div class="col"><a href="">L</a></div>
                <div class="col"><a href="">M</a></div>
                <div class="col"><a href="">N</a></div>
                <div class="col"><a href="">O</a></div>
                <div class="col"><a href="">P</a></div>
                <div class="col"><a href="">Q</a></div>
                <div class="col"><a href="">R</a></div>
                <div class="col"><a href="">S</a></div>
                <div class="col"><a href="">T</a></div>
                <div class="col"><a href="">U</a></div>
                <div class="col"><a href="">V</a></div>
                <div class="col"><a href="">W</a></div>
                <div class="col"><a href="">X</a></div>
                <div class="col"><a href="">Y</a></div>
                <div class="col"><a href="">Z</a></div>
                <div class="col"><a href="">#</a></div>
            </div>
            <h2 class="mt-4">A</h2>
            <div class="row">
              @foreach($allBrands as $allbrand)
                <div class="col-md-3 col-sm-4">
                    <a href="{{asset('/'.$allbrand->url)}}">{{$allbrand->name}}</a>
                </div>
                @endforeach

            </div>
        </div>
    </section>


@endsection

@push('plugin-scripts')
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"
></script>
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

@endpush
