@extends('layouts.main')

@section('content')

    @include('components.search-wrapper')

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        @include('components.mobile-nav')

        @include('components.header')

        @include('components.product-categories')

    </div>
    <!-- ##### Main Content Wrapper End ##### -->

@endsection
