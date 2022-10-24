@extends('layouts.scaffold')
@section('content')
<div style="margin-left: 20%;" class="container">
    <div class="row mb-5  mt-5">
        <div class="col-md-12">
            <a class="float-right btn btn-primary" href="{{route('carousel.index')}}">view all</a>
        </div>
        @if(Session::has('error'))
        <div class="col-md-12 alert alert-danger alert-dismissible fade show mb-5 mt-5" role="alert">
        {{Session::get('error')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
    </div>
    <form action="{{route('carousel.update',$carousel->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="car">
            <div class="card-header">
                <h1 class="text-center">Add Data</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="bgimg">
                            @if(!empty($carousel->bgimg))
                                <img src="{{asset('upload/carousel/'.$carousel->bgimg)}}" alt="" width="200px" class="img-thumbnail mt-3">
                            @endif
                        <small class="text-danger">@error ('bgimg') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title' , $carousel->title)}}">
                        <small class="text-danger">@error ('title') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="info">Information</label>
                        <input type="text" class="form-control" name="info" value="{{old('info' , $carousel->info)}}">
                        <small class="text-danger">@error ('info') {{$message}} @enderror</small>
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