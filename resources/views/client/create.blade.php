@extends('layouts.scaffold')
@section('content')
<div style="margin-left: 20%;" class="container">
    <div class="row">
        <div class="mt-5 mb-3 col-md-12">
            <a class="float-right btn btn-primary" href="{{route('client.index')}}">view all</a>
        </div>
        @if(Session::has('error'))
        <div class="col-md-12 alert alert-danger alert-dismissible fade show mb-5 mt-5" role="alert">
        {{Session::get('error')}}
</div>
@endif
    </div>
    <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Add Data</h1>
            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-md-12 mt-4">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        <small class="text-danger">@error ('name') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image">
                        <small class="text-danger">@error ('image') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" name="company" value="{{old('company')}}">
                        <small class="text-danger">@error ('company') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="about">About</label>
                        <input type="text" class="form-control" name="about" value="{{old('about')}}">
                        <small class="text-danger">@error ('about') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{old('facebook')}}">
                        <small class="text-danger">@error ('facebook') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control" name="twitter" value="{{old('twitter')}}">
                        <small class="text-danger">@error ('twitter') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" class="form-control" name="linkedin" value="{{old('linkedin')}}">
                        <small class="text-danger">@error ('linkedin') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <button class="btn btn-primary form-control" type="submit">Add Data</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection