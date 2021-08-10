
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


              <section class="login-page" style="margin-bottom: 100px">
                <div class="container">
                  <div class="row mt-4">
                    <div class="col-12">
                        @include('errorMessage.message')
                      <h3>Forgot Password</h3>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-6 col-sm-12">
                      <div class="returning-customer">
                        <h4>Please Enter Your E-mail</h4>

                <form method="post" action="{{route('user.forgot-password')}}">
                  @csrf

                  <div class="form-group">
                    <input
                      type="email" name="email" id="email"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>

                  <style>
                    .register .btn-primary {
                      background-color: red;
                      color: white;
                      border-color: red;
                    }
                    .register .btn-primary:hover {
                      background-color: white;
                      color: red;
                    }
                  </style>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="float-right" href="#">Forgot Password?</a>
                </form>

              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="new-customer">
                <h4>New Customer?</h4>
                <p>
                  Creating an account is fast, easy, and free. You'll be able to
                  manage your autoships, track your orders, write reviews, and
                  more!
                </p>
                <a href="{{route('user.register')}}" class="btn btn-primary"> Create an account </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <style>
        @media (min-width: 1200px) {
          .container {
            max-width: 900px;
          }
        }
        .returning-customer {
          padding: 20px;
          background-color: #f8f8f8d1;
          border: 1px solid #dfdfdf;
        }
        .returning-customer .btn-primary {
          background: red;
          border-color: red;
        }
        .returning-customer a {
          color: red;
        }
        .new-customer .btn-primary{
          background: red;
          border-color: red;
        }
      </style>
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


@endpush
