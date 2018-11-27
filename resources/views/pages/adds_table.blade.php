@extends('layouts.user')
@section('content')
@include('components.search-wrapper')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Accepted Advertisements</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    

                    @foreach($advertisements as $advertisements)
                    <div class="row w-100">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-6">
                        <form method="POST" action="/adds_creating">
                          {{ csrf_field() }}

                            {{ $advertisements->title}}
                        
                        </form>
                        </div>
                        <div class="col-md-4">
                            @include('components.paybox')
                        </div>
                    </div>
                    <br>
                    
                    @endforeach
                    
                    <br>

                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
