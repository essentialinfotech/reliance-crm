@extends('layouts.frontLayout.front_design')
@push('plugin-styles')
<link
  rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
  crossorigin="anonymous"
/>


@endpush
@section('content')
<section class="register">
    <div class="container">
        <div class="row">
            <div class="col-12">
                      @include('errorMessage.message')

                <h3>Create an Account</h3>
                <h4 style="color: #128ced;">Please enter your information</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12" style="margin-bottom:60px">

                <form method="post" action="{{route('user.user_register')}}">
                  @csrf
                  <div class="form-group">
                      <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Name">
                    </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" onkeyup='check();'>
                  </div>
                  <div class="form-group">
                      <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" onkeyup='check();'>
                           <span id='message'></span>
                    </div>
                    <style>
                        .register .btn-primary{
                            background-color: red;
                            color: white;
                            border-color: red;
                        }
                        .register .btn-primary:hover{
                            background-color: white;
                            color: red;
                        }
                    </style>
                  <button style="width: 100%;" type="submit" class="btn btn-primary">Submit</button>
                  <p>By creating your account, you agree to drollypet's <a style="color:black; text-decoration:underline" href="#">Privacy Policy</a> and <a style="color:black; text-decoration:underline" href="#">Terms of Use</a></p>
                </form>

                <hr/>
                <style>
                    .register .btn-outline-primary{
                        border-color: red;
                        color: red;
                    }
                    .register .btn-outline-primary:hover{
                        border-color: red;
                        color: white;
                        background-color: red;
                    }
                </style>
                <p class="text-center">Already have an account?</p>
                <a href="{{route('user.user_login_form')}}" class="btn btn-outline-primary" style="width: 100%;">Sign in</a>
            </div>
            <div class="col-md-6 col-sm-12 md-mt-4">
                <div class="signup-info">
                    <p>Creating an account is fast, easy, and free. You'll be able to manage your autoships, track your orders, write reviews, and more!</p>
                    <ul>
                        <li>TRACK YOUR ORDERS</li>
                        <li>MANAGE AUTOSHIP</li>
                        <li>VIEW YOUR ORDER HISTORY</li>
                        <li>RATE AND REVIEW PRODUCTS</li>
                        <li>GET EXCLUSIVE OFFERS, DISCOUNTS, AND MORE!</li>
                    </ul>
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


@endpush
