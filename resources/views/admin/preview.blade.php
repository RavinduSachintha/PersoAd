@extends('layouts.admin')
@section('content')
<div class="container">
        <a href="{{route('back')}}" class="btn btn-info" role="button" >Back</a>
    <h2>Content of the Advertisement</h2>
    <hr />
<img src="storage\Advertisements\{{$add->photo}}" style="width:400px; height:400px; margin-left:350px; border-radius:50%; border-color:blue; border-width:1px; margin-right:25px;">
@endsection