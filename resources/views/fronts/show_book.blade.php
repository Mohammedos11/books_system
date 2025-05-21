<!DOCTYPE html>
<html lang="en">

<head>
    <title>My beatifull Books</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/icomoon/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <style>
        .banner-image {
            width: 359px;
            height: 572px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    <div id="header-wrap">

        <div class="top-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                        <div class="col-md-2">
                            <div class="main-logo">
                                <a href="index.html"><img src="{{ asset('front_end/images/main-logo.png') }}"
                                        alt="logo"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-element">

                            <a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
                                    $)</span></a>

                            <div class="action-menu">

                                <div class="search-bar">
                                    <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                        <i class="icon icon-search"></i>
                                    </a>
                                    <form role="search" method="get" class="search-box">
                                        <input class="search-field text search-input" placeholder="Search"
                                            type="search">
                                    </form>
                                </div>
                            </div>

                        </div><!--top-right-->
                    </div>

                </div>
            </div>
        </div><!--top-content-->
        <header id="header">
            <div class="container-fluid">
                <div class="row justify-content-end"> <!-- Push content to the right -->

                    <div class="col-md-10">
                        <nav id="navbar">
                            <div class="main-menu stellarnav d-flex justify-content-end"> <!-- Align nav items right -->
                                <ul class="menu-list d-flex gap-4">
                                    <li class="menu-item active"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="menu-item">
                                        <a href="{{ url('home#featured-books') }}" class="nav-link">Featured</a>
                                    </li>
                                    <li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>
                                    <li class="menu-item"><a href="#special-offer" class="nav-link">Offer</a></li>
                                    <li class="nav-item dropdown">
                                        @if (auth()->check() && auth()->user()->role === 'user')
                                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ auth()->user()->name }}
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                                <li>
                                                    <a href="{{ route('user_logout') }}"
                                                        style="color: red;text-align: center"><i
                                                            class="fas fa-sign-out-alt"></i>
                                                        Logout</a>

                                                </li>
                                            </ul>
                                        @else
                                            <a href="{{ route('login') }}" class="nav-link">Login </a>
                                        @endif
                                    </li>


                                </ul>

                                <div class="hamburger ms-3">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </div>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </header>


    </div>

    <section id="book-details" class="py-5">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('book_images/' . $book->image) }}" alt="Book Cover"
                        class="banner-image mb-4">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-3">Book Name : {{ $book->name }}</h2>
                    <h5 class="mb-3 text-muted">The Author Name :{{ $book->author->name }}</h5>
                    <p class="mb-4">
                        Book Description : {{ $book->description }}
                    </p>
                    @if ($book->offer)
                        <h4 class="mb-2">The Price :<del>{{ $book->price }} $</del></h4>
                        <h4 class="mb-4 text-success">The offer price : {{ $book->offer->offer_price }} $</h4>
                    @else
                        <h4 class="mb-4">Price : {{ $book->price }} $</h4>
                    @endif


                    @if ($book->tags)
                        @foreach ($book->tags as $item)
                            <span class="badge bg-success">
                                {{ $item->name }}
                            </span>
                        @endforeach
                    @endif
                    <br>
                    <a href="#" class="btn btn-primary btn-lg"><i class="icon icon-cart"></i>Add To Cart</a>
                </div>
            </div>
        </div>
    </section>

    <hr>
    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="copyright">
                        <div class="row">

                            <div class="col-md-6">
                                <p>© 2022 All rights reserved. Free HTML Template by <a
                                        href="https://www.templatesjungle.com/" target="_blank">TemplatesJungle</a>
                                </p>
                            </div>

                            <div class="col-md-6">
                                <div class="social-links align-right">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon icon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-youtube-play"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon icon-behance-square"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div><!--grid-->

                </div><!--footer-bottom-content-->
            </div>
        </div>
    </div>

    <script src="{{ asset('front_end/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="{{ asset('front_end/js/plugins.js') }}"></script>
    <script src="{{ asset('front_end/js/script.js') }}"></script>

</body>

</html>
