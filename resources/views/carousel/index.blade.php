@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 20%;" class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <a class="btn btn-primary float-right" href="{{route('carousel.create')}}">Add Carousel</a>
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
                <th>Bg Image</th>
                <th>Title</th>
                <td>Information</td>
                <th>Action</th>
            </tr>
            @forelse($carousels as $carousel)
            <tr>
                <td>{{$carousel->id}}</td>
                <td><img style="height: 50%; width:50%;" class="rounded img-thumbnail" src="{{asset('upload/carousel/'.$carousel->bgimg)}}" alt="" ></td>
                <td>{{$carousel->title}}</td>
                <td>{{$carousel->info}}</td>
                <td>
                <a class="btn btn-info btn-sm" href="{{ route('carousel.edit' , $carousel->id) }}"> Edit</a>
                    &nbsp;|&nbsp;
                    <a class="btn btn-success btn-sm " href="{{ route('carousel.delete' , $carousel->id) }}"> Delete</a>
                </td>
                @empty
                    <td class="text-center" colspan="5"><h4>No data</h4></td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection                     