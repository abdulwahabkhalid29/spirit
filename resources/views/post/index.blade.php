@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 20%;" class="container">
        <div class="row">
            <div class="mt-5 col-md-12 mb-3">
                <a class="btn btn-primary float-right" href="{{route('post.create')}}">Add post</a>
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
                <th>Name</th>
                <td>Image</td>
                <th>About</th>
                <th>Action</th>
            </tr>
            @forelse($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>
                <td><img style="height: 50%; width:50%;" class="rounded img-thumbnail" src="{{asset('upload/post/'.$post->image)}}" alt="" ></td>
                <td>{{$post->about}}</td>
                <td>
                <a class="btn btn-info btn-sm" href="{{ route('post.edit' , $post->id) }}"> Edit</a>
                    &nbsp;|&nbsp;
                    <a class="btn btn-success btn-sm " href="{{ route('post.delete' , $post->id) }}"> Delete</a>
                </td>
                @empty
                    <td class="text-center" colspan="8"><h4>No data</h4></td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection                     