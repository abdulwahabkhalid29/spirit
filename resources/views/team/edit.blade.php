@extends('layouts.scaffold')
@section('content')
<div style="margin-left: 20%;" class="container">
    <div class="row">
        <div class="mt-5 mb-3 col-md-12">
            <a class="float-right btn btn-primary" href="{{route('team.index')}}">view all</a>
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
    <form action="{{route('team.update',$team->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="car">
            <div class="card-header">
                <h1 class="text-center">Add Data</h1>
            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-md-12 mt-4">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name' , $team->name)}}">
                        <small class="text-danger">@error ('name') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="about">About</label>
                        <input type="text" class="form-control" name="about" value="{{old('about' , $team->about)}}">
                        <small class="text-danger">@error ('about') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="img">
                            @if(!empty($team->img))
                                <img src="{{asset('upload/team/'.$team->img)}}" alt="" width="200px" class="img-thumbnail mt-3">
                            @endif
                        <small class="text-danger">@error ('img') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{old('facebook' , $team->facebook)}}">
                        <small class="text-danger">@error ('facebook') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control" name="twitter" value="{{old('twitter' , $team->twitter)}}">
                        <small class="text-danger">@error ('twitter') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="skype">Skype</label>
                        <input type="text" class="form-control" name="skype" value="{{old('skype' , $team->skype)}}">
                        <small class="text-danger">@error ('skype') {{$message}} @enderror</small>
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