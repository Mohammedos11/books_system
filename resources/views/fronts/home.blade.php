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
                                    <li class="menu-item active"><a href="#home">Home</a></li>
                                    <li class="menu-item"><a href="#featured-books" class="nav-link">Featured</a></li>
                                    <li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>
                                    <li class="menu-item"><a href="#special-offer" class="nav-link">Offer</a></li>
                                    <li class="menu-item"><a href="" class="nav-link">Login</a></li>
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


    </div><!--header-wrap-->

    <section id="billboard">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <button class="prev slick-arrow">
                        <i class="icon icon-arrow-left"></i>
                    </button>

                    <div class="main-slider pattern-overlay">
                        @foreach ($bannerBooks->take(2) as $item)
                            <div class="slider-item">
                                <div class="banner-content">
                                    <h2 class="banner-title">{{ $item->name }}</h2>
                                    <p>{{ $item->description }}.</p>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                                class="icon icon-ns-arrow-right"></i></a>
                                    </div>
                                </div>
                                @if ($item->image)
                                    <img src="{{ asset('book_images/' . $item->image) }}" alt="banner"
                                        class="banner-image">
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <button class="next slick-arrow">
                        <i class="icon icon-arrow-right"></i>
                    </button>

                </div>
            </div>
        </div>

    </section>

    <section id="client-holder" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="inner-content">
                    <div class="logo-wrap">
                        <div class="grid">
                            <a href="#"><img src="{{ asset('front_end/images/client-image1.png') }}"
                                    alt="client"></a>
                            <a href="#"><img src="{{ asset('front_end/images/client-image2.png') }}"
                                    alt="client"></a>
                            <a href="#"><img src="{{ asset('front_end/images/client-image3.png') }}"
                                    alt="client"></a>
                            <a href="#"><img src="{{ asset('front_end/images/client-image4.png') }}"
                                    alt="client"></a>
                            <a href="#"><img src="{{ asset('front_end/images/client-image5.png') }}"
                                    alt="client"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured-books" class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center">
                        <div class="title">
                            <span>Some quality items</span>
                        </div>
                        <h2 class="section-title">Featured Books</h2>
                    </div>

                    <div class="product-list" data-aos="fade-up">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="images/product-item1.jpg" alt="Books" class="product-item">
                                        <button type="button" class="add-to-cart"
                                            data-product-tile="add-to-cart">Add to
                                            Cart</button>
                                    </figure>
                                    <figcaption>
                                        <h3>Simple way of piece life</h3>
                                        <span>Armor Ramsey</span>
                                        <div class="item-price">$ 40.00</div>
                                    </figcaption>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="images/product-item2.jpg" alt="Books" class="product-item">
                                        <button type="button" class="add-to-cart"
                                            data-product-tile="add-to-cart">Add to
                                            Cart</button>
                                    </figure>
                                    <figcaption>
                                        <h3>Great travel at desert</h3>
                                        <span>Sanchit Howdy</span>
                                        <div class="item-price">$ 38.00</div>
                                    </figcaption>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="images/product-item3.jpg" alt="Books" class="product-item">
                                        <button type="button" class="add-to-cart"
                                            data-product-tile="add-to-cart">Add to
                                            Cart</button>
                                    </figure>
                                    <figcaption>
                                        <h3>The lady beauty Scarlett</h3>
                                        <span>Arthur Doyle</span>
                                        <div class="item-price">$ 45.00</div>
                                    </figcaption>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="images/product-item4.jpg" alt="Books" class="product-item">
                                        <button type="button" class="add-to-cart"
                                            data-product-tile="add-to-cart">Add to
                                            Cart</button>
                                    </figure>
                                    <figcaption>
                                        <h3>Once upon a time</h3>
                                        <span>Klien Marry</span>
                                        <div class="item-price">$ 35.00</div>
                                    </figcaption>
                                </div>
                            </div>

                        </div><!--ft-books-slider-->
                    </div><!--grid-->


                </div><!--inner-content-->
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="btn-wrap align-right">
                        <a href="#" class="btn-accent-arrow">View all products <i
                                class="icon icon-ns-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="best-selling" class="leaf-pattern-overlay">
        <div class="corner-pattern-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="row">

                        <div class="col-md-6">
                            <figure class="products-thumb">
                                <img src="images/single-image.jpg" alt="book" class="single-image">
                            </figure>
                        </div>

                        <div class="col-md-6">
                            <div class="product-entry">
                                <h2 class="section-title divider">Best Selling Book</h2>

                                <div class="products-content">
                                    <div class="author-name">By Timbur Hood</div>
                                    <h3 class="item-title">Birds gonna be happy</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
                                        libero ipsum enim pharetra hac.</p>
                                    <div class="item-price">$ 45.00</div>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-accent-arrow">shop it now <i
                                                class="icon icon-ns-arrow-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- / row -->

                </div>

            </div>
        </div>
    </section>

    <section id="popular-books" class="bookshelf py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center">
                        <div class="title">
                            <span>Some quality items</span>
                        </div>
                        <h2 class="section-title">Popular Books</h2>
                    </div>

                    <ul class="tabs">
                        <li data-tab-target="#all-genre" class="active tab">All Genre</li>
                        <li data-tab-target="#business" class="tab">Business</li>
                        <li data-tab-target="#technology" class="tab">Technology</li>
                        <li data-tab-target="#romantic" class="tab">Romantic</li>
                        <li data-tab-target="#adventure" class="tab">Adventure</li>
                        <li data-tab-target="#fictional" class="tab">Fictional</li>
                    </ul>

                    <div class="tab-content">
                        <div id="all-genre" data-tab-content class="active">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item1.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Portrait photography</h3>
                                            <span>Adam Silber</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item2.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Once upon a time</h3>
                                            <span>Klien Marry</span>
                                            <div class="item-price">$ 35.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item3.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Tips of simple lifestyle</h3>
                                            <span>Bratt Smith</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item4.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Just felt from outside</h3>
                                            <span>Nicole Wilson</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Peaceful Enlightment</h3>
                                            <span>Marmik Lama</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item6.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Great travel at desert</h3>
                                            <span>Sanchit Howdy</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item8.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div id="business" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item2.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Peaceful Enlightment</h3>
                                            <span>Marmik Lama</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item4.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Great travel at desert</h3>
                                            <span>Sanchit Howdy</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item6.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item8.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="technology" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item1.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Peaceful Enlightment</h3>
                                            <span>Marmik Lama</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item3.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Great travel at desert</h3>
                                            <span>Sanchit Howdy</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="romantic" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item1.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Peaceful Enlightment</h3>
                                            <span>Marmik Lama</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item3.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Great travel at desert</h3>
                                            <span>Sanchit Howdy</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="adventure" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="fictional" data-tab-content>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item5.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Life among the pirates</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="images/tab-item7.jpg" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart"
                                                data-product-tile="add-to-cart">Add to
                                                Cart</button>
                                        </figure>
                                        <figcaption>
                                            <h3>Simple way of piece life</h3>
                                            <span>Armor Ramsey</span>
                                            <div class="item-price">$ 40.00</div>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!--inner-tabs-->

            </div>
        </div>
    </section>



    <section id="special-offer" class="bookshelf pb-5 mb-5">

        <div class="section-header align-center">
            <div class="title">
                <span>Grab your opportunity</span>
            </div>
            <h2 class="section-title">Books with offer</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="inner-content">
                    <div class="product-list" data-aos="fade-up">
                        <div class="grid product-grid">
                            <div class="product-item">
                                <figure class="product-style">
                                    <img src="images/product-item5.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                </figure>
                                <figcaption>
                                    <h3>Simple way of piece life</h3>
                                    <span>Armor Ramsey</span>
                                    <div class="item-price">
                                        <span class="prev-price">$ 50.00</span>$ 40.00
                                    </div>
                            </div>
                            </figcaption>

                            <div class="product-item">
                                <figure class="product-style">
                                    <img src="images/product-item6.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                </figure>
                                <figcaption>
                                    <h3>Great travel at desert</h3>
                                    <span>Sanchit Howdy</span>
                                    <div class="item-price">
                                        <span class="prev-price">$ 30.00</span>$ 38.00
                                    </div>
                            </div>
                            </figcaption>

                            <div class="product-item">
                                <figure class="product-style">
                                    <img src="images/product-item7.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                </figure>
                                <figcaption>
                                    <h3>The lady beauty Scarlett</h3>
                                    <span>Arthur Doyle</span>
                                    <div class="item-price">
                                        <span class="prev-price">$ 35.00</span>$ 45.00
                                    </div>
                            </div>
                            </figcaption>

                            <div class="product-item">
                                <figure class="product-style">
                                    <img src="images/product-item8.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                </figure>
                                <figcaption>
                                    <h3>Once upon a time</h3>
                                    <span>Klien Marry</span>
                                    <div class="item-price">
                                        <span class="prev-price">$ 25.00</span>$ 35.00
                                    </div>
                            </div>
                            </figcaption>

                            <div class="product-item">
                                <figure class="product-style">
                                    <img src="images/product-item2.jpg" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                        Cart</button>
                                </figure>
                                <figcaption>
                                    <h3>Simple way of piece life</h3>
                                    <span>Armor Ramsey</span>
                                    <div class="item-price">$ 40.00</div>
                                </figcaption>
                            </div>
                        </div><!--grid-->
                    </div>
                </div><!--inner-content-->
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
