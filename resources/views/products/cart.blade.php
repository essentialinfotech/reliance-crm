@extends('layouts.frontLayout.front_design')
@push('plugin-styles')
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
<section class="shopping-cart mt-4">
  <?php $total_amount = 0;  ?>

	<div class="container" style="margin-bottom: 100px">
		<h2>Your Shopping Cart</h2>
		<div class="row">
			<div class="col-md-8">
				<!-- product -->

				<div class="item-info item-in-cart mt-2">
					<div class="row">
              @foreach($userCart as $cart)
						<div class="col-md-3 col-sm-6">
							<img style="width: 100px;" src="{{asset('images/backend_images/products/small/'.$cart->image)}}" alt="" />
						</div>
						<div class="col-lg-7 col-md-6 col-sm-6">
							<a href="">
								{{$cart->product_name}}
							</a>
							<p style="color: #d80000" class="mt-2"><b>${{$cart->price}}</b></p>
							<hr />
							<small>Save 5% on future orders</small>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-12">
              <div class="cart_quantity_button">
                <div class="form-control">
        									<a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart->id.'/1')}}"> + </a>
                </div>

        									<input class="cart_quantity_input" type="text" name="quantity" value="{{$cart->quantity}}" autocomplete="off" size="2">

                <div class="form-control">
                        	@if($cart->quantity>1)
        									<a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart->id.'/-1')}}"> - </a>
        									@endif
                </div>
        								</div>
                        <div class="form-control">
                    	<a class="cart_quantity_delete" href="{{route('cart.delete',$cart->id)}}"><i class="fa fa-times"></i></a>
                        </div>

                        <div class="col-4">
            							<p style="display: none; font-weight: bold">${{$cart->price*$cart->quantity}}</p>
            						</div>

						</div>
            <?php $total_amount =  $total_amount + ($cart->price*$cart->quantity); ?>

              @endforeach
					</div>
				</div>

			</div>

			<div class="col-md-4">
				<div class="added-ship mt-2">
					<p>
						Your order ships <b>FREE!</b>
						<i class="fa fa-truck" aria-hidden="true"></i>
					</p>
					<hr />
					<div class="row">
						<div class="col-8">
							<p><b>Subtotal</b> </p>
						</div>
						<div class="col-4">
							<p style="color: #cf0000; font-weight: bold"><?php echo $total_amount; ?></p>
						</div>
					</div>
					<div class="row no-gutters mt-2">

						<div class="col-8">
							<a class="form-control btn btn-primary" href="{{route('product.checkout')}}"
								>Proceed to Checkout</a
							>
						</div>
					</div>
					<p class="mt-3"><b>Flat-Rate Shipping:</b> <span style="color: #ca0000;font-weight: bold;">FREE</span></p>

				</div>
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

@endpush
