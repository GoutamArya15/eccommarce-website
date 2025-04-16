@extends('user.layouts.user-main')
@section('header')
    <header>
        <div class="container-fluid">
            <div class="row py-3 border-bottom">
                <div
                    class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
                    <div class="d-flex align-items-center my-3 my-sm-0">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" class="img-fluid">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#menu"></use>
                        </svg>
                    </button>
                </div>

                <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4" style="width: 41.333333%">
                    <div class="search-bar row bg-light p-2 rounded-4">
                        <div class="col-md-7">
                            <form id="search-form" class="text-center" action="index.html" method="post">
                                <input type="text" class="form-control border-0 bg-transparent"
                                    placeholder="{!! __('welcome.search_placeholder1') !!}">
                            </form>
                        </div>
                        <div class="col-5" style="display: flex;justify-content:end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <ul
                        class="navbar-nav list-unstyled d-flex flex-row   flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
                        <li class="nav-item active"
                            style="display: flex
                    ;
                        justify-content: space-between;
                        width: 100px;
                        margin-left: 48px;
                        gap: 28px;
                        margin-top: 5px">
                            <a href="index.html" class="nav-link">{!! __('welcome.Home') !!}</a>
                            <a class="nav-link dropdown-toggle pe-3" role="button" id="pages" data-bs-toggle="dropdown"
                                aria-expanded="false">{!! __('welcome.Pages') !!}</a>
                            <ul class="dropdown-menu border-0 p-3 rounded-0 shadow" aria-labelledby="pages">
                                <li><a href="index.html" class="dropdown-item">About Us </a></li>
                                <li><a href="index.html" class="dropdown-item">Shop </a></li>
                                <li><a href="index.html" class="dropdown-item">Single Product </a></li>
                                <li><a href="index.html" class="dropdown-item">Cart </a></li>
                                <li><a href="index.html" class="dropdown-item">Checkout </a></li>
                                <li><a href="index.html" class="dropdown-item">Blog </a></li>
                                <li><a href="index.html" class="dropdown-item">Single Post </a></li>
                                <li><a href="index.html" class="dropdown-item">Styles </a></li>
                                <li><a href="index.html" class="dropdown-item">Contact </a></li>
                                <li><a href="index.html" class="dropdown-item">Thank You </a></li>
                                <li><a href="index.html" class="dropdown-item">My Account </a></li>
                                <li><a href="index.html" class="dropdown-item">404 Error </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" style="    display: flex; margin-left: 190px; margin-top: 11px;">
                            <ul class="dropdown-menu border-0 p-3 rounded-0 shadow" aria-labelledby="pages">
                                @guest
                                    <li><a href="{{ route('login') }}" class="dropdown-item">Login</a></li>
                                    <li><a href="{{ route('register') }}" class="dropdown-item">Register</a></li>
                                @endguest
                                @auth
                                    <li><a href="{{ route('logout') }}" class="dropdown-item">Logout</a></li>
                                @endauth
                            </ul>
                            <a href="#agsasf " class="p-2 mx-1">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a href="#" class="p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                                aria-controls="offcanvasCart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                            <a class="nav-link dropdown-toggle pe-3" role="button" id="pages" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa-regular fa-user"></i></a>
                        </li>
                    </ul>
                </div>

                <div
                    class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
                </div>

            </div>
        </div>
    </header>
@endsection

@section('inside_section')
    <style>
        svg {
            height: 50px;
        }
    </style>
    <div class="container mt-5" style="height: 700px">
        <div class="row">
            <div class="col-md-2" style="height: 700px;margin-top:50px;">
                <h5 style="margin-left: 20px;">Category</h5>
                <div class="form-check">
                    <input class="form-check-input checkbox_cat" type="checkbox" value="1" id="flexCheckDefault"
                        style="border: 1px solid" name="category[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        Vegitable
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input checkbox_cat" type="checkbox" value="2" id="flexCheckChecked"
                        style="border: 1px solid" name="category[]">
                    <label class="form-check-label" for="flexCheckChecked">
                        Fruits
                    </label>
                </div>

                <h5 style="margin-left: 20px;margin-top:50px;">Price</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                        style="border: 1px solid">
                    <label class="form-check-label" for="flexCheckDefault">
                        $500
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked
                        style="border: 1px solid">
                    <label class="form-check-label" for="flexCheckChecked">
                        $500
                    </label>
                </div>
            </div>
            <div class="col-md-10" style="height: 700px">
                <div class="row">
                    {{-- {{dd($products->toArray()['data'])}} --}}
                    @foreach ($products->toArray()['data'] as $value)
                        <div class="col-md-4">
                            <div class="product-item">
                                <figure>
                                    <a href="index.html" title="Product Title">
                                        <img src="http://127.0.0.1:8000/assets/uploads/products/{{ $value['details']['product_image'] }}"
                                            alt="Product Thumbnail" class="tab-image">
                                    </a>
                                </figure>
                                <div class="d-flex flex-column text-center">
                                    <h3 class="fs-6 fw-normal">{{ $value['product_name'] }}</h3>
                                </div>
                                <div class="d-flex flex-column text-center">
                                    <button class="btn btn-success text-white">See</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $products->links() }}

                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        let array = [];
        $(".checkbox_cat").on("change", function() {
            if (this.checked) {
                this.setAttribute('checked', 'checked');
                array.push($(this).val());
                category_filter();
            } else {
                this.removeAttribute('checked');
                array = array.filter(function(item) {
                    return item !== $(this).val();
                }.bind(this));
                // console.log(array);
            }
        });

        function category_filter() {
            $.ajax({
                type: "get",
                url: "{{ route('shop.filter') }}",
                data: {
                    category: array
                },
                success: function(response) {
                    alert("successfully 🌹");
                }
            });
        }
    </script>
@endsection
