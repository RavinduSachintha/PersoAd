@extends('layouts.main')

@section('content')

    @include('components.search-wrapper')

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        @include('components.mobile-nav')

        @include('components.header')

        <div class="amado_product_area section-padding-0">
            {{--<div class="container-fluid">--}}

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                {{--<p>Showing 1-8 0f 25</p>--}}
                                {{--<div class="view d-flex">--}}
                                    {{--<a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>--}}
                                    {{--<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>--}}
                                {{--</div>--}}
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex">
                                <div class="sort-by-date d-flex align-items-center mr-15">
                                    <p>Categories</p>
                                    <form method="GET" action="/searching">
                                        <select name="select" id="select">
                                            @foreach ($cat as $c)
                                                <option value="{{$c->name}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary">{{ __('Search') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Single Product Area -->
                        @foreach ($ad as $a)
                            @if($a->paid=="yes")
                                <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                            <div class="product-img">
                                                <a href="product-details/{{$a->id}}">
                                                    <img src="http://127.0.0.1:8000/storage/Advertisements/{{$a->photo}}"
                                                         alt="">
                                                    <!-- Hover Thumb -->
                                                    <img class="hover-img" src="http://127.0.0.1:8000/storage/Advertisements/{{$a->photo}}" alt="">
                                                </a>
                                            </div>

                                        <!-- Product Description -->
                                        <div class="product-description d-flex align-items-center justify-content-between">
                                            <!-- Product Meta Data -->
                                            <div class="product-meta-data">
                                                <div class="line"></div>
                                                <a href="product-details.blade.php">
                                                    <h6>{{$a->title}}</h6>
                                                </a>
                                            </div>
                                            <!-- Ratings & Cart -->
                                            <div class="ratings-cart text-right">
                                                <div class="ratings">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="cart">
                                                    <a href="cart.blade.php" data-toggle="tooltip" data-placement="left"
                                                       title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            {{--</div>--}}
        </div>
    </div>

    <!-- ##### Main Content Wrapper End ##### -->

@endsection