@extends('layouts.scaffold')
@section('content')
<div style="margin-left: 20%;" class="container">
    <div class="row">
        <div class="mt-5 mb-3 col-md-12">
            <a class="float-right btn btn-primary" href="{{route('blog.index')}}">view all</a>
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
    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="car">
            <div class="card-header">
                <h1 class="text-center">Add Data</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail">
                        <small class="text-danger">@error ('thumbnail') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-3">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" name="category" value="{{old('category')}}">
                    <small class="text-danger">@error ('category') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                        <small class="text-danger">@error ('title') {{$message}} @enderror</small>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="work">Works</label>
                        <input type="text" class="form-control" name="work" value="{{old('work')}}">
                        <small class="text-danger">@error ('work') {{$message}} @enderror</small>
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