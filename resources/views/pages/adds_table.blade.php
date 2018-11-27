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

                    
                    

                    @foreach($advertisements as $advertisement)
                    <div class="row w-100">
                        <div class="col-md-6 offset-md-2">
                        <form method="POST" action="/adds_creating">
                          {{ csrf_field() }}

                            {{ $advertisement->title }}
                        
                        </form>
                        </div>
                        <div class="col-md-4">
                            @include('components.paybox',['advertisement'=> $advertisement])
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
