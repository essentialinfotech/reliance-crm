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


<section id="cart_items" style="margin-bottom: 100px">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Check out</li>
			</ol>
		</div><!--/breadcrums-->

		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<h2>Billing Details</h2>
						<div class="form-group">

							{{$userDetails->name}}
						</div>
							<div class="form-group">
							{{$userDetails->address}}
						</div>
							<div class="form-group">
							{{$userDetails->city}}
						</div>
							<div class="form-group">
							{{$userDetails->state}}
						</div>
							<div class="form-group">
							{{$userDetails->country}}
						</div>
							<div class="form-group">
							{{$userDetails->pincode}}
						</div>
							<div class="form-group">
						{{$userDetails->mobile}}
						</div>

					</div>
				</div>
				<div class="col-sm-1">
					<h2 ></h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form">
						<h2>Shipping Details</h2>
						<div class="form-group">
					{{$userDetails->name}}
					</div>
						<div class="form-group">
						{{$userDetails->address}}
					</div>
						<div class="form-group">
						{{$userDetails->city}}
					</div>
						<div class="form-group">
						{{$userDetails->state}}
					</div>
					<div class="form-group">
						{{$userDetails->country}}
				</div>
						<div class="form-group">
						{{$userDetails->pincode}}
					</div>
						<div class="form-group">
					{{$userDetails->mobile}}
					</div>



					</div>
				</div>
			</div>
		</div>
		<div class="review-payment">
			<h2>Review & Payment</h2>
		</div>

		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php $total_amount = 0;  ?>
					@foreach($userCart as $item)
					<tr>
						<td class="cart_product">
							<a href=""><img style="width: 100px;" src="{{asset('images/backend_images/products/small/'.$item->image)}}" alt=""></a>
						</td>
						<td class="cart_description">
							<h4><a href="">{{$item->product_name}}</a></h4>
							<p>Code: {{$item->product_code}} | Size: {{$item->size}} </p>
						</td>
						<td class="cart_price">
							<p>&#2547; {{$item->price}}</p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$item->id.'/1')}}"> + </a>
								<input class="cart_quantity_input" type="text" name="quantity" value="{{$item->quantity}}" autocomplete="off" size="2">
								@if($item->quantity>1)
								<a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$item->id.'/-1')}}"> - </a>
								@endif
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">&#2547; {{$item->price*$item->quantity}}</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="{{route('cart.delete',$item->id)}}"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php $total_amount =  $total_amount + ($item->price*$item->quantity); ?>
    @endforeach
					<tr>
						<td colspan="4">&nbsp;</td>
						<td colspan="2">
							<table class="table table-condensed total-result">
								<tr>
									<td>Cart Sub Total</td>
									<td>&#2547; {{$total_amount}}</td>
								</tr>
								<tr class="shipping-cost">
									<td>Shipping Cost</td>
									<td>&#2547; 0</td>
								</tr>
								<tr class="shipping-cost">
									<td>Discount Amount</td>
									<td>
										@if(!empty(Session::get('CouponAmount')))
										&#2547; {{Session::get('CouponAmount')}}
										@else
										&#2547; 0
										@endif

									</td>
								</tr>
								<tr>
									<td>Grand Total</td>
									<td><span>&#2547; {{$grand_total = $total_amount - Session::get('CouponAmount')}}</span></td>
								</tr>

							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>


		<form name="paymentForm" id="paymentForm" action="{{route('user.placeOrder')}}" method="POST">
			@csrf
			<input type="hidden" name="grand_total" value="{{$grand_total}}">
		<div class="payment-options">
				<span>
					<label><strong>Select Payment Method:</strong></label>
				</span>
				<span>
					<label><input type="radio" name="payment_method" id="COD" value="COD"><strong> Cash On Delivary</strong></label>
				</span>
				<span>
					<label><input type="radio" name="payment_method" id="Paypal" value="Paypal"><strong> Paypal</strong></label>
				</span>
      
      <span>
        <label><input type="radio" name="payment_method" id="Debit-credit" value="Debit-credit"><strong> Debit/ Credit card</strong></label>
      </span>


				<span style="float: right">
				<button type="submit" class="btn btn-success" onclick="return selectPaymentMethod();">Place Order</button>
				</span>

			</div>
		</form>

	</div>
</section> <!--/#cart_items-->


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
