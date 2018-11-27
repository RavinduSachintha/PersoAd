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

                    <!-- ##### Main Content Wrapper Start ##### -->
                    <div class="main-content-wrapper d-flex clearfix">

                    @foreach($advertisements as $advertisements)
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                        <form method="POST" action="/adds_creating">
                          {{ csrf_field() }}

                            {{ $advertisements->title}}
                        
                        </form>
                        </div>
                        <div class="col-sm-2">
                                <a href=#><button type="submit" class="btn btn-primary">{{ __('Payment') }}
                                </button>
                            </a>
                        
                        </div>
                    </div>
                    
                    @endforeach
                    </div>
                    <br>

                   
                </div>
            </div>
        </div>
    </div>
</div>
 @include('components.newsletter')
@endsection
