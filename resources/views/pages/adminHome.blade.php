@extends('layouts.admin')
@section('content')
<div class="container">
    @include('components.message')
    <h2>Advertisement Acceptance</h2>
    <hr />
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Category</th>
            <th>Body</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($ad as $a)
        @if($a->flag==0)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->title}}</td>
            <td>{{$a->category}}</td>
            <td>{{$a->body}}</td>
        <td>
                <a href="{{route('notify', $a->id)}}" class="btn" role="button" style="background-color:greenyellow"><i class="fa fa-check" style="color:green; font-size:20px; margin-top:-3px;"></i></a>
                <a href="{{route('check', $a->id)}}" class="btn" role="button" style="background-color:mediumturquoise"><i class="fa fa-eye" style="color:blue; font-size:20px; margin-top:-3px;"></i></a>
        </td>
        
    </tr>
    @endif
    @endforeach
    </table>
</div>
@endsection
