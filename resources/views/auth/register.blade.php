@extends('layouts.app')

@section('content')
<style>
  body{
    background-color: #E9ECEF;
  }
  h2{
    margin-top: 100px;
  }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h2 class="text-center text-secondary">AdminLTE</h2>
          <a href="{{route('index')}}" class="btn btn-danger mb-5">Back to Spirit</a>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="p-3 text-center">Register a new membership</h3>
                </div>
            </div>
    <div class="card-body register-card-body">
      <p class="login-box-msg"></p>

      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
         
        </div>
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
       
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your Password" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
          
        </div>
        <div class="input-group mb-3">
        <input id="password-confirm" type="password" class="form-control" placeholder="Re-type your Password" name="password_confirmation" required autocomplete="new-password">
          
        </div>
 
        <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <div class="col-md-6">
          <button type="submit" class="form-control btn btn-primary">
                                    {{ __('Register') }}
                                </button>
          </div>
        </div>
      </form>

      

      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
  </div>
        </div>
    </div>
</div>
</div>
@endsection