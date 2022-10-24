@extends('layouts.scaffold')
@section('content')
<div style="margin-left: 20%;" class="container">
    <div class="row">
        <div class="mt-5 mb-3 col-md-12">
            <a class="btn btn-primary float-right" href="{{route('post.index')}}">view all</a>
        </div>
        @if(Session::has('error'))
        <div class="col-md-12 alert alert-danger alert-dismissible fade show mb-5 mt-5" role="alert">
        {{Session::get('error')}}
</div>
@endif
    </div>
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
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
                        <label for="about">About</label>
                        <input type="text" class="form-control" name="about" value="{{old('about')}}">
                        <small class="text-danger">@error ('about') {{$message}} @enderror</small>
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