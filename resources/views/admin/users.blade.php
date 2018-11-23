@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>User Account Details</h2>
    <hr />
    <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>E-mail</th>
                <th width="200px">Action</th>
            </tr>
            @foreach ($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
            <td>
    
            </td>
            @endforeach
        </tr>
    
        </table>
    </div>
@endsection