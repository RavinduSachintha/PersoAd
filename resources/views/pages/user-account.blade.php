@extends('layouts.user')
@section('content')
@include('components.search-wrapper')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Your Advertisement Here</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- ##### Main Content Wrapper Start ##### -->
                    <div class="main-content-wrapper d-flex clearfix">
                    @include('pages.adds_creating')
                    </div>
                    <!-- ##### Main Content Wrapper End ##### -->

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
