@extends('layouts.main')

@section('content')

    @include('components.search-wrapper')

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        @include('components.mobile-nav')

        @include('components.header')

        <center><h5>This page is still under construction...</h5></center>

    </div>
    <!-- ##### Main Content Wrapper End ##### -->

@endsection
