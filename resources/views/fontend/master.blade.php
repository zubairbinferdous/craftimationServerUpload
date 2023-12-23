<!DOCTYPE html>
<html lang="en">

<head>

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WXGF95MK');
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Craftimation</title>
    <link rel="icon" href="{{ asset('fontend/image/banner/logo.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('fontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('fontend/css/main.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXGF95MK" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- hero-area  -->

    <nav class="navbar sticky-top navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('homePage') }}"><img
                    src="{{ asset('fontend/image/banner/logo.jpg') }}" alt="" style="height: 50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="{{ route('homePage') }}">Home</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('shop') }}">shop</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
                        @csrf
                        <input class="form-control me-1" type="search" placeholder="Search" name="search"
                            aria-label="Search" value="{{ isset($search) ? $search : '' }}">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>


                </ul>
                <div class="user_logo_two">
                    <a href="{{ route('cartView') }}"><i class="fa-solid fa-cart-arrow-down"></i></a>
                </div>
                <a class="icon" href="{{ route('cartView') }}">{{ Cart::count() }}</a>

                @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link login">Dashboard</a>
                    @else
                        <a class="nav-link login" href="{{ route('login') }}">login</a>
                        @if (Route::has('register'))
                            <a class="nav-link login" href="{{ route('register') }}">registration</a>
                        @endif
                    @endauth
                @endif
                <div class="user_logo">
                    <a href="https://www.facebook.com/Craftimationhandcrafts" target="_blank"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/_craftimation_/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@craftimation07" target="_blank"><i
                            class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.tiktok.com/@craftimation" target="_blank"><i
                            class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>


        </div>
        </div>
    </nav>
    <span id="minicart"> </span>

    @yield('master')

    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 contact-area">
                        <h4>Contact number</h4>
                        <div class="contact-data">
                            <h3>phone</h4>
                                <p>01942852007</p>

                        </div>
                        <div class="contact-data">
                            <h3>email</h4>
                                <p>shop@craftimation.com
                                </p>
                        </div>

                    </div>
                    <div class="col-md-3 contact-area">
                        <h4>My Account</h4>
                        <ul class="footer-url">
                            <li><a href="{{ route('login') }}">login</a></li>
                            <li><a href="{{ route('register') }}">registration</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 contact-area">
                        <h4>Socials</h4>
                        <ul class="footer-url">
                            <li><a href="https://www.facebook.com/Craftimationhandcrafts" target="_blank">facebook</a>
                            </li>
                            <li><a href="https://www.instagram.com/_craftimation_/" target="_blank">instagram</a></li>
                            <li><a href="https://www.tiktok.com/@craftimation" target="_blank">tikTok</a></li>
                            <li><a href="https://www.youtube.com/@craftimation07" target="_blank">youTube</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 contact-area">
                        <h4>Explore</h4>
                        <ul class="footer-url">
                            <li><a href="{{ route('shop') }}">shop</a></li>
                            {{-- <li><a href="">whole-sale</a></li> --}}
                            <li><a href="{{ route('about') }}">about</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    {{-- <div class="com">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, repellat.</p>
    </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $(document).ready(function() {
            // ------------ Counter BEGIN ------------
            $(".counter__increment, .counter__decrement").click(function(e) {
                var $this = $(this);
                var $counter__input = $(this).parent().find(".counter__input");
                var $currentVal = parseInt($(this).parent().find(".counter__input").val());

                //Increment
                if ($currentVal != NaN && $this.hasClass("counter__increment")) {
                    $counter__input.val($currentVal + 1);
                }
                //Decrement
                else if ($currentVal != NaN && $this.hasClass("counter__decrement")) {
                    if ($currentVal >= 1) {
                        $counter__input.val($currentVal - 1);
                    }
                }
            });
            // ------------ Counter END ------------
        });


        /// Start Details Page Add To Cart Product

        function addToCartDetails() {

            var product_name = $('#dpname').text();
            var id = $('#dproduct_id').val();
            var quantity = $('#dqty').val();
            $.ajax({
                type: "POST",
                dataType: 'json',
                data: {
                    quantity: quantity,
                    product_name: product_name,
                },
                url: "/dcart/data/store/" + id,
                success: function(data) {
                    location.reload();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            title: data.success,
                        })

                    } else {

                        Toast.fire({
                            type: 'error',
                            title: data.error,
                        })
                    }

                    // End Message
                }
            })

        }

        $(document).ready(function() {
            $('.addproduct').on('click', function() {
                var id = $(this).data('id');
                if (id) {
                    $.ajax({
                        url: "/add/to/cart/" + id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            location.reload();
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                icon: 'success',
                                timer: 3000
                            })
                            if ($.isEmptyObject(data.error)) {
                                Toast.fire({
                                    type: 'success',
                                    title: data.success
                                })
                            } else {
                                Toast.fire({
                                    type: 'error',
                                    title: data.error
                                })
                            }

                        },

                    });
                } else {
                    alert('danger');
                }

            });
        });
    </script>

    <script type="text/javascript">
        function cart() {
            $.ajax({
                type: 'GET',
                url: '/get-cart-product',
                dataType: 'json',
                success: function(response) {
                    // console.log(response)

                    var rows = ""
                    $.each(response.carts, function(key, value) {
                        rows += `
                        
                        <tr>
       
                            <td class="image product-thumbnail pt-40"><img src="${value.options.image} " alt="#"></td>
                            <td>${value.name} </td>
                            <td>${value.price}tk</td>
                            <td>
                                <div class="counter">
                                    <input class="counter__input" id="dqty" type="text" value="${value.qty}" name="counter" size="5" readonly="readonly" />
                                    <a class="counter__increment" type="submit" id="${value.rowId}" onclick="cartIncrement(this.id)">+</a>

                                    <a class="counter__decrement" type="submit" id="${value.rowId}" onclick="cartDecrement(this.id)">&ndash;</a>
                                </div>
                            </td>
                            <td>${value.subtotal}tk</td>
                            <td><a type="submit" id="${value.rowId}" onclick="cartRemove(this.id)"> X </a></td>


                            
                        </tr> 
                        
                        
                        `
                    });

                    $('#cartPage').html(rows);
                }
            })
        }
        cart();

        function cartRemove(id) {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/cart-remove/" + id,
                success: function(data) {
                    cart();
                    location.reload();
                    // Start Message 
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })
                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }
                    // End Message  
                }
            })
        }

        function cartDecrement(id) {
            $.ajax({
                type: 'GET',
                url: "/cart-decrement/" + id,
                dataType: 'json',
                success: function(data) {
                    cart();
                    location.reload();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })
                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }

                }
            });
        }

        function cartIncrement(id) {
            $.ajax({
                type: 'GET',
                url: "/cart-increment/" + id,
                dataType: 'json',
                success: function(data) {
                    cart();
                    location.reload();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {

                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })
                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }

                }
            });
        }
    </script>

</body>

</html>
{{-- // <td scope="row"><img src="${value.options.image} alt="#"</td> --}}
