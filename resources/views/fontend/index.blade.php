@extends('fontend.master')
@section('master')
    <div class="container-fluid">
        <div class="row">

            <div id="carouselExampleAutoplaying" class="carousel slide p0" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active banner-img banner-position"
                        style="background-image: url('{{ asset('fontend/image/banner/3.jpg') }}')">
                        <div class="banner_data">
                            <div class="banner_data_area text-center">
                                <p>
                                    Discover our <br />
                                    Collections
                                </p>
                                <button class="button"><a href="{{ route('shop') }}">shop now</a></button>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="carousel-item banner-img banner-position"
                        style="background-image: url('{{ asset('fontend/image/banner/3.jpg') }}')">
                        <div class="banner_data carousel-caption d-none d-md-block">
                            <h1>up to 50% off</h1>
                            <p>
                                Discover our <br />
                                Fashion Collections
                            </p>
                            <button class="button"><a href="shop.html">shop now</a></button>
                        </div> --}}
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </div>

    <!-- category-area-banner  -->
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 category-area-img category-area"
                style="background-image: url('{{ asset('fontend/image/category/1.jpg') }}'">
                <div class="category-data">
                    <p>NEW ARRIVALS</p>
                    <button class="button5"><a href="shop.html">shop now</a></button>
                </div>
            </div>
            <div class="col-md-3 category-area-img category-area"
                style="background-image: url('{{ asset('fontend/image/category/2.jpg') }}'">
                <div class="category-data">
                    <p>New DESIGN</p>
                    <button class="button5"><a href="shop.html">shop now</a></button>
                </div>
            </div>
            <div class="col-md-3 category-area-img category-area"
                style="background-image: url('{{ asset('fontend/image/category/3.jpg') }}'">
                <div class="category-data">
                    <p>MID SEASON'S</p>
                    <button class="button5"><a href="shop.html">shop now</a></button>
                </div>
            </div>
            <div class="col-md-3 category-area-img category-area"
                style="background-image: url('{{ asset('fontend/image/category/4.jpg') }}'">
                <div class="category-data">
                    <p>TOPS & JACKETS</p>
                    <button class="button5"><a href="shop.html">shop now</a></button>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container mt-50">
        <div class="row bg-img trend-position" style="background-image: url('{{ asset('fontend/image/banner/cha.jpeg') }}'">
            <div class="col-md-12">
                <div class="data-area-two">
                    <div class="data-twoo">
                        <h1>up to 20% goes for charity</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @php
        $product = App\Models\product::where('site_id', 1)
            ->orderBy('id', 'ASC')
            ->limit(4)
            ->get();
    @endphp

    <!-- Best Sellers  -->
    <div class="container">
        <div class="row text-center mt-50">
            <h2>Best Sellers</h2>
        </div>
        <div class="row product-area-data">


            @foreach ($product as $item)
                <div class="col-md-3  mb-5">
                    <div class="product-data-area border">
                        <div class="product-area text-center">
                            <input type="hidden" id="dproduct_id" value="{{ $item->id }}">
                            <input type="hidden" id="dqty" value="1">
                            <div class="product-img">
                                <a href="{{ route('singleProduct', $item->id) }}"><img src="{{ url($item->product_img) }}"
                                        alt="" /></a>

                            </div>
                            <div class="product-data-single-area text-start pl-50">
                                <a href="{{ route('singleProduct', $item->id) }}" id="dpname" class="product_name">name:
                                    {{ $item->product_name }}</a>
                                <h3>quantity: {{ $item->product_qty }}</h3>
                                <span>price: BDT {{ $item->product_price }}</span>
                            </div>
                        </div>
                        <div class="button-area text-center">
                            <button class="addToCart addproduct " type="submit" data-id="{{ $item->id }}">
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>
    @php
        $product = App\Models\product::where('site_id', 2)
            ->orderBy('id', 'ASC')
            ->limit(4)
            ->get();
    @endphp

    <!-- Best Sellers  -->
    <div class="container">
        <div class="row text-center mt-50">
            <h2>New Arrival</h2>
        </div>
        <div class="row product-area-data">


            @foreach ($product as $item)
                <div class="col-md-3  mb-5">
                    <div class="product-data-area border">
                        <div class="product-area text-center">
                            <input type="hidden" id="dproduct_id" value="{{ $item->id }}">
                            <input type="hidden" id="dqty" value="1">
                            <div class="product-img">
                                <a href="{{ route('singleProduct', $item->id) }}"><img src="{{ url($item->product_img) }}"
                                        alt="" /></a>

                            </div>
                            <div class="product-data-single-area text-start pl-50">
                                <a href="{{ route('singleProduct', $item->id) }}" id="dpname" class="product_name">name:
                                    {{ $item->product_name }}</a>
                                <h3>quantity: {{ $item->product_qty }}</h3>
                                <span>price: BDT {{ $item->product_price }}</span>
                            </div>
                        </div>
                        <div class="button-area text-center">
                            <button class="addToCart addproduct " type="submit" data-id="{{ $item->id }}">
                                add to cart
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>

    <!-- GIFT-area  -->

    @php
        $catagory = App\Models\catagory::orderBy('id', 'ASC')
            ->limit(6)
            ->get();
    @endphp

    <!-- best-category-area  -->
    <div class="container best-category-area">
        <div class="row text-center mt-50">
            <h2>Categories</h2>
        </div>
        <div class="row">
            @foreach ($catagory as $item)
                <div class="col-md-2">
                    <div class="data-cate bg-img-banner" style="background-image: url('{{ asset($item->category_img) }}' ">
                        <div class="itam">
                            <h3>
                                <a href="{{ url('product/category/' . $item->id) }}">{{ $item->cate_name }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Best Sellers  -->
    {{-- <div class="container">
        <div class="row text-center mt-50">
            <h2>Our Featured</h2>
        </div>
        <div class="row product-area-data">
            <div class="col-md-3 border-right">
                <div class="product-area text-center">
                    <div class="product-img">
                        <img src="{{ asset('fontend/image/product/4.jpg') }}" alt="" />
                    </div>
                    <h4>category</h4>
                    <h3>Womens' Blue Fashion Jacket</h3>
                    <span>$200.00</span>
                </div>
            </div>
            <div class="col-md-3 border-right">
                <div class="product-area text-center">
                    <div class="product-img">
                        <img src="{{ asset('fontend/image/product/4.jpg') }}" alt="" />
                    </div>
                    <h4>category</h4>
                    <h3>Womens' Blue Fashion Jacket</h3>
                    <span>$200.00</span>
                </div>
            </div>
            <div class="col-md-3 border-right">
                <div class="product-area text-center">
                    <div class="product-img">
                        <img src="{{ asset('fontend/image/product/4.jpg') }}" alt="" />
                    </div>
                    <h4>category</h4>
                    <h3>Womens' Blue Fashion Jacket</h3>
                    <span>$200.00</span>
                </div>
            </div>
            <div class="col-md-3 border-right">
                <div class="product-area text-center">
                    <div class="product-img">
                        <img src="{{ asset('fontend/image/product/4.jpg') }}" alt="" />
                    </div>
                    <h4>category</h4>
                    <h3>Womens' Blue Fashion Jacket</h3>
                    <span>$200.00</span>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- go to shop area  -->
    {{-- <div class="container-fluid mt-50">
        <div class="row">
            <div class="col-md-3 p0">
                <div class="trend bg-img trend-position"
                    style="background-image: url({{ asset('fontend/image/category/5.jpg') }}">
                    <h3>New Arrivals</h3>
                    <h2>TRENDS FOR MEN</h2>
                    <button class="button5"><a href="#">shop now</a></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="trend-two bg-img trend-position"
                        style="background-image: url({{ asset('fontend/image/category/6.jpg') }}">
                        <h3>New Arrivals</h3>
                        <h2>TRENDS FOR MEN</h2>
                        <button class="button5"><a href="#">shop now</a></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p0">
                        <div class="trend-three bg-img trend-position"
                            style="background-image: url({{ asset('fontend/image/category/8.jpg') }}">
                            <h2>TRENDS FOR MEN</h2>
                            <button class="button5"><a href="#">shop now</a></button>
                        </div>
                    </div>
                    <div class="col-md-6 p0">
                        <div class="trend-four bg-img trend-position" style="background-color: black">
                            <h3>New Arrivals</h3>
                            <h2>TRENDS FOR MEN</h2>
                            <button class="button5"><a href="#">shop now</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p0">
                <div class="trend-five bg-img trend-position"
                    style="background-image: url({{ asset('fontend/image/category/7.jpg') }}">
                    <h3>New Arrivals</h3>
                    <h2>TRENDS FOR MEN</h2>
                    <a href="shop.html" class="button5">shop now</a>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- new-area  -->
    {{-- <div class="container best-category-area">
        <div class="row text-center mt-50">
            <h2>New Arrivals</h2>
        </div>
        <div class="row product-area-data">
            <div class="col-md-3 border-right">
                <div class="product-area text-center">
                    <div class="product-img">
                        <img src="{{ asset('fontend/image/product/4.jpg') }}" alt="" />
                    </div>
                    <h4>category</h4>
                    <h3>Womens' Blue Fashion Jacket</h3>
                    <span>$200.00</span>
                </div>
            </div>
            <div class="col-md-3 border-right">
                <div class="product-area text-center">
                    <div class="product-img">
                        <img src="{{ asset('fontend/image/product/4.jpg') }}" alt="" />
                    </div>
                    <h4>category</h4>
                    <h3>Womens' Blue Fashion Jacket</h3>
                    <span>$200.00</span>
                </div>
            </div>
            <div class="col-md-3 border-right">
                <div class="product-area text-center">
                    <div class="product-img">
                        <img src="{{ asset('fontend/image/product/4.jpg') }}" alt="" />
                    </div>
                    <h4>category</h4>
                    <h3>Womens' Blue Fashion Jacket</h3>
                    <span>$200.00</span>
                </div>
            </div>
            <div class="col-md-3 border-right">
                <div class="product-area text-center">
                    <div class="product-img">
                        <img src="{{ asset('fontend/image/product/4.jpg') }}" alt="" />
                    </div>
                    <h4>category</h4>
                    <h3>Womens' Blue Fashion Jacket</h3>
                    <span>$200.00</span>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- GIFT-area  -->
    {{-- <div class="container mt-50">
        <div class="row bg-img trend-position"
            style="background-image: url({{ asset('fontend/image/banner/cta.jpg') }})">
            <div class="col-md-6">
                <div class="data-one">
                    <h1>GET OUR PERFECT GIFT.</h1>
                    <h2>Special Offer Collection.</h2>
                    <a href="#">VIEW ALL COLLECTION</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="data-area-two">
                    <div class="data-two">
                        <h1>up to 20% off</h1>
                        <button class="button2"><a href="#">on the way</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Instagram-area  -->
    {{-- 
    <div class="container mt-50">
        <div class="row text-center mt-50">
            <h2>Instagram</h2>
        </div>

        <div class="row">
            <div class="col-md-2 ins">
                <img src="{{ asset('fontend/image/instagram/1.jpg') }}" alt="" />
            </div>
            <div class="col-md-2 ins">
                <img src="{{ asset('fontend/image/instagram/2.jpg') }}" alt="" />
            </div>
            <div class="col-md-2 ins">
                <img src="{{ asset('fontend/image/instagram/3.jpg') }}" alt="" />
            </div>
            <div class="col-md-2 ins">
                <img src="{{ asset('fontend/image/instagram/5.jpg') }}" alt="" />
            </div>
            <div class="col-md-2 ins">
                <img src="{{ asset('fontend/image/instagram/4.jpg') }}" alt="" />
            </div>
            <div class="col-md-2 ins">
                <img src="{{ asset('fontend/image/instagram/5.jpg') }}" alt="" />
            </div>

        </div>
    </div> --}}

    <!-- email-area  -->
    <div class="container-fluid email-border mt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="data-email-logo">
                        <a class="navbar-brand fw-bold" href="{{ route('homePage') }}"><img
                                src="{{ asset('fontend/image/banner/logo.jpg') }}" alt="" style="height: 50px"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="data-email-logo">
                        <h2>connect with us</h2>
                        <p>
                            Subscribe to learn our latest products
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="data-email-email">
                        <div class="email-data-area">
                            <input type="text" placeholder="enter your email" />
                            <button type="submit" class="eamil-submit button3">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
