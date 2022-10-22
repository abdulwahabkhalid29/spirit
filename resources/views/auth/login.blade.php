@extends('layouts.app')

@section('content')
<style>
  body{
    background-color: #E9ECEF;
  }
  h2{
    margin-top: 150px;
  }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <h2 class="text-center text-secondary">AdminLTE</h2>
    <a href="{{route('index')}}" class="btn btn-danger mb-5">Back to Blog</a>
        <div class="shadow-lg card ">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
          
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

<label class="form-check-label" for="remember">
    {{ __('Remember Me') }}
</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <button type="submit" class="form-control btn btn-primary">
                                    {{ __('Login') }}
</button>


          </div>
          <!-- /.col -->
        </div>
      </form>

   
      <!-- /.social-auth-links -->

      <div class="float-right">
            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
            </div>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
        </div>
</div>
    </div>
</div>
@endsection
