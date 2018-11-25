@extends('layouts.admin')
@section('content')
<div class="container">
        @include('components.message')
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
                    <a href="{{route('deletead', $a->id)}}" class="btn" role="button" style="background-color:bisque"><i class="fa fa-trash" style="color:red; font-size:20px; margin-top:-5px;"></i></a>
            </td>
            @endforeach
        </tr>
    
        </table>
    </div>
@endsection