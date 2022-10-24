@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 20%;" class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <a class="btn btn-primary float-right" href="{{route('client.create')}}">Add Client</a>
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
                <th>Company</th>
                <th>About</th>
                <td>Facebook</td>
                <td>Twitter</td>
                <td>Linkedin</td>
                <th>Action</th>
            </tr>
            @forelse($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td><img style="height: 100%; width:100%;" class="rounded img-thumbnail" src="{{asset('upload/client/'.$client->image)}}" alt="" ></td>
                <td>{{$client->company}}</td>
                <td>{{$client->about}}</td>
                <td>{{$client->facebook}}</td>
                <td>{{$client->twitter}}</td>
                <td>{{$client->linkedin}}</td>
                <td>
                <a class="btn btn-info btn-sm" href="{{ route('client.edit' , $client->id) }}"> Edit</a>
                    &nbsp;|&nbsp;
                    <a class="btn btn-success btn-sm " href="{{ route('client.delete' , $client->id) }}"> Delete</a>
                </td>
                @empty
                    <td class="text-center" colspan="8"><h4>No data</h4></td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection                     