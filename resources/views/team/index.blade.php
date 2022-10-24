@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 20%;" class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <a class="btn btn-primary float-right" href="{{route('team.create')}}">Add Team</a>
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
                <th>About</th>
                <td>Image</td>
                <td>Facebook</td>
                <td>Twitter</td>
                <td>Skype</td>
                <th>Action</th>
            </tr>
            @forelse($teams as $team)
            <tr>
                <td>{{$team->id}}</td>
                <td>{{$team->name}}</td>
                <td>{{$team->about}}</td>
                <td><img style="height: 50%; width:50%;" class="rounded img-thumbnail" src="{{asset('upload/team/'.$team->img)}}" alt="" ></td>
                <td>{{$team->facebook}}</td>
                <td>{{$team->twitter}}</td>
                <td>{{$team->skype}}</td>
                <td>
                <a class="btn btn-info btn-sm" href="{{ route('team.edit' , $team->id) }}"> Edit</a>
                    &nbsp;|&nbsp;
                    <a class="btn btn-success btn-sm " href="{{ route('team.delete' , $team->id) }}"> Delete</a>
                </td>
                @empty
                    <td class="text-center" colspan="8"><h4>No data</h4></td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection                     