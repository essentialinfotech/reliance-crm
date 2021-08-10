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
<section id="form" style="margin-bottom: 100px"><!--form-->
		<div class="container">
			@include('errorMessage.message')
			<div class="row">

				<div class="col-sm-6 col-sm-offset-1">
					<div class="login-form">
						<h2>update Account</h2>
						<form action="{{route('user.user_account')}}" id="accountForm" name="accountForm" method="POST" >
							@csrf
             	<input value="{{$userDetails->email}}" type="text" id="email" name="email" placeholder="Email"/>
							<input value="{{$userDetails->name}}" type="text" id="name" name="name" placeholder="Name"/>
						  <input value="{{$userDetails->address}}" type="text" id="address" name="address" placeholder="Address"/>
						  <input value="{{$userDetails->city}}" type="text" id="city" name="city" placeholder="City"/>
						  <input value="{{$userDetails->state}}" type="text" id="state" name="state" placeholder="State"/>
							<select id="country" name="country">
								<option value="">Select Country</option>
								@foreach($countries as   $country)
								<option value="{{$country->country_name}}" @if($country->country_name == $userDetails->country) selected @endif>{{$country->country_name}}</option>

								@endforeach
							</select>
						<input value="{{$userDetails->pincode}}" style="margin-top: 10px" type="text" id="pincode" name="pincode" placeholder="Pincode"/>
						<input value="{{$userDetails->mobile}}" type="text" id="mobile" name="mobile" placeholder="mobile"/>
						<br>
							<button type="submit" class="btn btn-default">Update</button>
						</form>

					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form">
						<h2>Update Password</h2>
						<form class="form-horizontal" method="post" action="{{route('user.updatePassword')}}" name="passwordForm" id="passwordForm">
							@csrf
							<div class="control-group">
								<label class="control-label">Current Password</label>
								<div class="controls">
									<input type="password" name="current_pwd" id="current_pwd" />
									<span id="chkPwd"></span>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">New Password</label>
								<div class="controls">
									<input type="password" name="new_pwd" id="new_pwd" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Confirm password</label>
								<div class="controls">
									<input type="password" name="confirm_pwd" id="confirm_pwd" />
								</div>
							</div>
							<div class="form-actions">
								<input type="submit" value="Update Password" class="btn btn-success">
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section><!--/form-->


@endsection
