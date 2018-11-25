@extends('layouts.admin')
@section('content')
<div class="container"> 
    <div class="well">
    @include('components.message')
    <h2>Category Details</h2>
    <hr />
    <a href="createcategory" class="btn float-right" role="button" title="New Category" style="background-color:silver"><i class="fa fa-plus" style="color:blue; font-size:25px; margin-top:5px;"></i></a>
    <br><br>
    <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th width="200px">Action</th>
            </tr>
            @foreach ($cat as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>
            <td>
                    <a href="{{route('deletecat', $c->id)}}" class="btn" role="button" style="background-color:bisque"><i class="fa fa-trash" style="color:red; font-size:20px; margin-top:-5px;"></i></a>
            </td>
            @endforeach
        </tr>
    
        </table>
    </div>
</div>
@endsection