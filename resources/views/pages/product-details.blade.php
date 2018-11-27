@extends('layouts.main')

@section('content')

    @include('components.search-wrapper')

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

    @include('components.mobile-nav')

    @include('components.header')

    <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                                <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                {{--@foreach($advertisements as $advertisements)--}}
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="http://127.0.0.1:8000/storage/Advertisements/{{$advertisements->photo}}">
                                            <img class="d-block w-100" src="http://127.0.0.1:8000/storage/Advertisements/{{$advertisements->photo}}"
                                                 alt="First slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                    <h3>{{ $advertisements->title}}</h3>
                            </div>

                            <div class="short_overview my-5">
                                <p>{{ $advertisements->category}}</p>
                            </div>

                            <div class="short_overview my-5">
                                <p>{{ $advertisements->body}}</p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="post">
                                <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart
                                </button>
                            </form>

                        </div>
                    {{--@endforeach--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->

    </div>
    <!-- ##### Main Content Wrapper End ##### -->

@endsection