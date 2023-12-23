@extends('fontend.master')
@section('master')
    <div class="container-fluid ">
        <div class="row bg-img trend-position" style="background-image: url('{{ asset('fontend/image/banner/cta.jpg') }}'">
            <div class="col-md-12">
                <div class="data-area-two">
                    <div class="data-twooo">
                        <h1>shop area</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m50">
        <div class="row">
            <div class="col-md-3 ">
                <div class="side-bar border ">
                    <div class="category ">
                        <div class="dataa ">
                            <div class="cate_date text-center">
                                <h4>all category</h4>
                            </div>
                            @php
                                $category = App\Models\catagory::orderBy('id', 'ASC')->get();
                            @endphp
                            <div class="side-ber">

                                @foreach ($category as $item)
                                    <ul class="siderBer">

                                        <li><a href="{{ url('product/category/' . $item->id) }}"> {{ $item->cate_name }}
                                            </a>
                                            <ul class="subMenu">

                                                @foreach ($item->subcategories as $SubCategory)
                                                    <li><a
                                                            href="{{ url('product/subCategory/' . $SubCategory->id) }}">{{ $SubCategory->Sub_category }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                @endforeach



                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @php
                $product = App\Models\product::where('status', 1)
                    ->orderBy('id', 'ASC')
                    ->get();
            @endphp

            <div class="col-md-9">
                <div class="container">
                    <div class="row product-area-data">
                        @foreach ($product as $item)
                            <div class="col-md-3  mb-5">
                                <div class="product-data-area border">
                                    <div class="product-area text-center">
                                        <div class="product-img">
                                            <a href="{{ route('singleProduct', $item->id) }}"><img
                                                    src="{{ url($item->product_img) }}" alt="" /></a>

                                        </div>
                                        <div class="product-data-single-area text-start pl-50">
                                            <a href="{{ route('singleProduct', $item->id) }}" class="product_name">name:
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
            </div>
        </div>
    </div>
@endsection
