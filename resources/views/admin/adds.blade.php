@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Advertisement Details</h2>
    <hr />
    <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th width="200px">Action</th>
            </tr>
            @foreach ($ad as $a)
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->body}}</td>
            <td>
    
            </td>
            @endforeach
        </tr>
    
        </table>
    </div>
@endsection