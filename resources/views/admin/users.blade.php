@extends('layouts.admin')
@section('content')
<div class="container">
    @include('components.message')
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
            @if($u->id!=Auth::user()->id)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
            <td>
                    <a href="{{route('delete', $u->id)}}" class="btn" role="button" style="background-color:bisque"><i class="fa fa-trash" style="color:red; font-size:20px; margin-top:-5px;"></i></a>  
            </td>
        </tr>
        @endif
        @endforeach
        </table>
    </div> 
@endsection