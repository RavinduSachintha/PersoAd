@extends('layouts.admin')
@section('content')
<div class="container">
        @include('components.message')
    <h2>Advertisement Details</h2>
    <hr />
    <br><br />
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="margin-top:-60px">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href='#p'>Paid</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#v">Not Paid</a>
          </li>
        </ul>
        <div class="tab-content">
            <div id="p" class="container tab-pane active"><br>
    <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th width="200px">Action</th>
            </tr>
            @foreach ($ad as $a)
            @if($a->paid=="yes")
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->body}}</td>
            <td>
                    <a href="{{route('deletead', $a->id)}}" class="btn" role="button" style="background-color:bisque"><i class="fa fa-trash" style="color:red; font-size:20px; margin-top:-5px;"></i></a>
            </td>
            @endif
            @endforeach
        </tr>
    
        </table>
</div>
<div id="v" class="container tab-pane"><br>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($ad as $a)
        @if($a->flag==1 && $a->paid=="no")
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->title}}</td>
            <td>{{$a->body}}</td>
        <td>
                <a href="{{route('deletead', $a->id)}}" class="btn" role="button" style="background-color:bisque"><i class="fa fa-trash" style="color:red; font-size:20px; margin-top:-5px;"></i></a>
        </td>
        @endif
        @endforeach
    </tr>

    </table>
</div>
    </div>
</div>
@endsection