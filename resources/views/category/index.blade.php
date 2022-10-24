@extends('layouts.scaffold')
@section('content') 
<div style="margin-left: 20%; " class="container mt-5">
    <div class="row">
        <h1 class="text-success">Category</h1>
        <div class="col-md-12">
            <a href="{{route('category.create')}}"><button class="btn btn-info float-right mb-5">Add More Data</button></a>
        </div>
        @if(Session::has('success'))
        <div class="col-md-12 alert alert-info alert-dismissible fade show mb-5 mt-5" role="alert">
        {{Session::get('success')}}

</div>
@endif

    </div>
    <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>status</th>
                <th>Action</th>
            </tr>
            @forelse($categories as $category)
            <tr>
                <td>{{($category->id)}}</td>
                <td>{{($category->name)}}</td>
                <td>
                    @if($category->status == 1)
                    <span class="bg-success text-light rounded p-2">Active</span>
                    @else
                    <span class="bg-danger text-light rounded p-2">Deactive</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{route('category.edit',$category->id)}}"> Edit</a>
                    &nbsp;|&nbsp;
                    <a class="btn btn-success btn-sm " href="{{route('category.delete',$category->id)}}"> Delete</a>
                </td>
            </tr>
            @empty
            <td class="text-center" colspan="4"><h4>No data</h4></td>
            @endforelse
    </table>
</div>
@endsection                     