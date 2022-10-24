@extends('layouts.scaffold')
@section('content')
    <div style="margin-left: 20%;" class="container">
        <div class="row">

            @if(Session::has('success'))
        <div class="col-md-12 alert alert-success alert-dismissible fade show mb-5 mt-5" role="alert">
        {{Session::get('success')}}

</div>
@endif
        </div>
        <table class="mt-5 table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <td>E-mail</td>
                <th>Subject</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            @forelse($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->mobile}}</td>
                <td>{{$contact->message}}</td>
                <td><a class="btn btn-success btn-sm " href="{{ route('contact.delete' , $contact->id) }}"> Delete</a></td>
                @empty
                    <td class="text-center" colspan="8"><h4>No data</h4></td>
            </tr>
            @endforelse
        </table>
    </div>
@endsection                     