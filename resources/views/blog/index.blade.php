@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 20%;" class="container">
        <div class="row">
            <div class="col-md-12 mb-3 mt-5">
                <a class="btn btn-primary float-right" href="{{route('blog.create')}}">Add Blog</a>
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
                <th>Thumbnail</th>
                <th>Title</th>
                <td>Work</td>
                <td>Category</td>
                <th>Action</th>
            </tr>
            @forelse($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td><img style="height: 50%; width:50%;" class="rounded img-thumbnail" src="{{asset('upload/blog/'.$blog->thumbnail)}}" alt="" ></td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->work}}</td>
                <td>{{$blog->category}}</td>
                <td>
                <a class="btn btn-info btn-sm" href="{{ route('blog.edit' , $blog->id) }}"> Edit</a>
                    &nbsp;|&nbsp;
                    <a class="btn btn-success btn-sm " href="{{ route('blog.delete' , $blog->id) }}"> Delete</a>
                </td>
                @empty
                    <td class="text-center" colspan="6"><h4>No data</h4></td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection                     