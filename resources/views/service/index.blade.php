@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 20%;" class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <a class="float-right btn btn-primary float-right" href="{{route('service.create')}}">Add Carousel</a>
            </div>
            @if(Session::has('success'))
        <div class="col-md-12 alert alert-success alert-dismissible fade show mb-5 mt-5" role="alert">
        {{Session::get('success')}}

</div>
@endif
        </div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <td>Information</td>
                <th>Action</th>
            </tr>
            @forelse($services as $service)
            <tr>
                <td>{{$service->id}}</td>
                <td><img style="height: 150%; width:150%;" class="rounded img-thumbnail" src="{{asset('upload/service/'.$service->img)}}" alt="" ></td>
                <td>{{$service->title}}</td>
                <td>{{$service->info}}</td>
                <td>
                <a class="btn btn-info btn-sm" href="{{ route('service.edit' , $service->id) }}"> Edit</a>
                    &nbsp;|&nbsp;
                    <a class="btn btn-success btn-sm " href="{{ route('service.delete' , $service->id) }}"> Delete</a>
                </td>
                @empty
                    <td class="text-center" colspan="5"><h4>No data</h4></td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection                     