@extends('layouts.main')

@section('content')

    @include('components.search-wrapper')

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        @include('components.mobile-nav')

        @include('components.header')

        <div class="mt-5 pt-5 mx-auto">
            <h5 class="mt-5 pt-5 text-primary">This page is still under construction...</h5>
        </div>

    </div>
    <!-- ##### Main Content Wrapper End ##### -->

@endsection
