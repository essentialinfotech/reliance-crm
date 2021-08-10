@extends('layouts.frontLayout.front_design')
@push('plugin-styles')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
  crossorigin="anonymous"
/>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous"
/>
<link rel="stylesheet" href="{{asset('assets/frontend/owl.carousel.min.css')}}" />
<link
  rel="stylesheet"
  href="{{asset('assets/frontend/owl.theme.default.min.css')}}"
/>
<link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}" />
@endpush
@section('content')
<section class="checkout-page mt-4" style="margin-bottom: 100px">
   @include('errorMessage.message')
  <div class="container">
    <h2>Checkout</h2>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <?php $total_amount = 0;  ?>
        @foreach($userCart as $item)
          <li
            class="
              list-group-item
              d-flex
              justify-content-between
              lh-condensed
            "
          >
            <div>
              <h6 class="my-0">{{$item->product_name}}</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">${{$item->price*$item->quantity}}</span>
          </li>
          <?php $total_amount =  $total_amount + ($item->price*$item->quantity); ?>
          @endforeach

          @if(!empty(Session::get('CouponAmount')))
          <li class="list-group-item d-flex justify-content-between">
            <span>Sub Total (USD)</span>
            <strong>$<?php echo $total_amount; ?></strong>
          </li>

          <li
            class="list-group-item d-flex justify-content-between bg-light"
          >
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>

            </div>
            <span class="text-success"> -$<?php echo Session::get('CouponAmount'); ?></span>



          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Grand Total (USD)</span>
            <strong>$<?php echo $total_amount - Session::get('CouponAmount'); ?></strong>
          </li>
          @else

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$<?php echo $total_amount; ?></strong>
          </li>
          @endif
        </ul>

        <form class="card p-2" action="{{route('cart.applyCoupon')}}" method="POST">
          @csrf
          <div class="input-group">
            <input
              type="text"
              name="coupon_code"
              class="form-control"
              placeholder="Promo code"
            />
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">
                Redeem
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8 order-md-1">
        <form action="{{route('product.checkout')}}" method="post">
      @csrf
    <div class="row">
      <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
          <h2>Bill To</h2>
          <div class="form-group">

            <input type="text" class="form-control" name="billing_name" id="billing_name" value="{{$userDetails->name}}"   placeholder=" Billing Name" />
          </div>
            <div class="form-group">
            <input type="text" class="form-control" name="billing_address" id="billing_address" value="{{$userDetails->address}}"  placeholder="  Billing Address" />
          </div>
            <div class="form-group">
            <input type="text" class="form-control" name="billing_city" id="billing_city" value="{{$userDetails->city}}"  placeholder=" Billing City" />
          </div>
            <div class="form-group">
            <input type="text" class="form-control" name="billing_state" id="billing_state" value="{{$userDetails->state}}"  placeholder="  Billing State" />
          </div>
            <div class="form-group">
              <select id="billing_country" name="billing_country">
                <option value="">Select Country</option>
                @foreach($countries as   $country)
                <option value="{{$country->country_name}}" @if($country->country_name == $userDetails->country) selected @endif>{{$country->country_name}}</option>

                @endforeach
              </select>
          </div>
            <div class="form-group">
            <input type="text" class="form-control" name="billing_pincode" id="billing_pincode" value="{{$userDetails->pincode}}"  placeholder=" Billing Pincode" />
          </div>
            <div class="form-group">
            <input type="text" class="form-control" name="billing_mobile" id="billing_mobile" value="{{$userDetails->mobile}}"  placeholder=" Billing Mobile" />
          </div>
          <div class="form-check">
              <input value="{{$userDetails->name}}"  type="checkbox" class="form-check-input" id="copyAddress">
              <label class="form-check-label" for="copyAddress">Shipping Address same as Billing Address</label>
          </div>

        </div><!--/login form-->
      </div>
      <div class="col-sm-1">
        <h2 ></h2>
      </div>
      <div class="col-sm-4">
        <div class="signup-form"><!--sign up form-->
          <h2>Ship To</h2>
          <div class="form-group">
          <input type="text" class="form-control" name="shipping_name" id="shipping_name" value="{{$userDetails->name}}"   placeholder="Shipping Name" />
        </div>
          <div class="form-group">
          <input type="text" class="form-control" name="shipping_address" id="shipping_address" value="{{$userDetails->address}}"   placeholder="Shipping  Address" />
        </div>
          <div class="form-group">
          <input type="text" class="form-control" name="shipping_city" id="shipping_city" value="{{$userDetails->city}}"   placeholder="Shipping City" />
        </div>
          <div class="form-group">
          <input type="text" class="form-control" name="shipping_state" id="shipping_state" value="{{$userDetails->state}}"   placeholder="Shipping  State" />
        </div>
        <div class="form-group">
          <select id="shipping_country" name="shipping_country">
            <option value="">Select Country</option>
            @foreach($countries as   $country)
            <option value="{{$country->country_name}}" @if($country->country_name == $userDetails->country) selected @endif>{{$country->country_name}}</option>

            @endforeach
          </select>
      </div>
          <div class="form-group">
          <input type="text" class="form-control" name="shipping_pincode" id="shipping_pincode" value="{{$userDetails->pincode}}"  placeholder="Shipping Pincode" />
        </div>
          <div class="form-group">
          <input type="text" class="form-control" name="shipping_mobile" id="shipping_mobile" value="{{$userDetails->mobile}}" placeholder="Shipping Mobile" />
        </div>

          <button type="submit" class="btn btn-success">Check Out</button>

        </div><!--/sign up form-->
      </div>
    </div>
  </div>
</form>
      </div>
    </div>
  </div>
</section>
@endsection
@push('custom-scripts')

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
  crossorigin="anonymous"
></script>

<script src="{{asset('assets/frontend/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/index.js')}}"></script>

@endpush
