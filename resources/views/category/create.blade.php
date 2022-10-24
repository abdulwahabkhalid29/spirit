@extends('layouts.scaffold')
@section('content')
<div style="margin-left: 20%;" class="container">
    <div class="row">
        <div class="mt-5 mb-3 col-md-12">
            <a class="float-right btn btn-primary" href="{{route('category.index')}}">view all</a>
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
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="car">
            <div class="card-header">
                <h1 class="text-center">Add Data</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        <small class="text-danger">@error ('name') {{$message}} @enderror</small>
                    </div>
                    </div>
                    <div class="mt-3 col-md-12">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="">Please Select</option>
                            <option value="1" @if(old("status") == 1) selected @endif>Active</option>
                            <option value="0" @if(old("status") == 2) selected @endif>Deactive</option>
                        </select>
                        <small class="text-danger">@error('status')  {{$message}} @enderror</small>
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