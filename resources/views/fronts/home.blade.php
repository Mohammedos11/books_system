<!DOCTYPE html>
<html lang="en">

<head>
    @include('fronts.layouts.header')
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    @include('fronts.layouts.nav-bar')
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

                            @foreach ($featuredBooks->take(4) as $fbook)
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <div style="width: 219px; height: 317px; overflow: hidden; margin: 0 auto;">
                                                <img src="{{ asset('book_images/' . $fbook->image) }}" alt="Books"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">
                                                Add to Cart
                                            </button>
                                        </figure>
                                        <figcaption>
                                            <h3>{{ $fbook->name }}</h3>
                                            <span>{{ $fbook->author->name }}</span>
                                            <div class="item-price">$ {{ $fbook->price }} </div>
                                        </figcaption>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                </div><!--inner-content-->
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="btn-wrap align-right">
                        <a href="{{ route('allBooks') }}" class="btn-accent-arrow">View all products <i
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
                        @foreach ($bestOfBooks as $bestOfBook)
                            <div class="col-md-6">
                                <figure class="products-thumb">
                                    <img src="{{ asset('book_images/' . $bestOfBook->image) }}" alt="book"
                                        class="single-image">
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <div class="product-entry">
                                    <h2 class="section-title divider">Best Selling Book</h2>
                                    <div class="products-content">
                                        <div class="author-name">By :{{ $bestOfBook->author->name }}</div>
                                        <h3 class="item-title">{{ $bestOfBook->name }}</h3>
                                        <p>{{ $bestOfBook->description }}</p>
                                        <div class="item-price">$ {{ $bestOfBook->price }}</div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

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
                        <li data-tab-target="#all-category" class="active tab">All Genre</li>

                        @foreach ($categories as $category)
                            <li data-tab-target="#category-{{ $category->id }}" class="tab">{{ $category->name }}
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        <div id="all-category" data-tab-content class="active">
                            <div class="row">
                                @foreach ($books as $book)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ asset('book_images/' . $book->image) }}" alt="Books"
                                                    class="product-item">
                                                <button type="button" class="add-to-cart"
                                                    data-product-tile="add-to-cart">Add to Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $book->name }}</h3>
                                                <span>{{ $book->author->name }}</span>
                                                <div class="item-price">$ {{ $book->price }}</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @foreach ($categories as $category)
                            <div id="category-{{ $category->id }}" data-tab-content>
                                <div class="row">
                                    @foreach ($category->books as $book)
                                        <div class="col-md-3">
                                            <div class="product-item">
                                                <figure class="product-style">
                                                    <img src="{{ asset('book_images/' . $book->image) }}"
                                                        alt="{{ $book->title }}" class="product-item">
                                                    <button type="button" class="add-to-cart"
                                                        data-product-tile="add-to-cart">Add to Cart</button>
                                                </figure>
                                                <figcaption>
                                                    <h3>{{ $book->name }}</h3>
                                                    <span>{{ $book->author->name }}</span>
                                                    <div class="item-price">${{ $book->price }}</div>
                                                </figcaption>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

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
            <div class="row text-center">
                <div class="inner-content">
                    <div class="product-list" data-aos="fade-up">
                        <div class="grid product-grid">

                            @foreach ($booksWithOffer as $booksOffer)
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="{{ asset('book_images/' . $booksOffer->image) }}" alt="Books"
                                            class="img-fluid w-95 rounded" style="height: 250px; object-fit: cover;">

                                        <button type="button" class="add-to-cart"
                                            data-product-tile="add-to-cart">Add to
                                            Cart</button>
                                    </figure>
                                    <figcaption>
                                        <h3>{{ $booksOffer->name }}</h3>
                                        <span>{{ $booksOffer->author->name }}</span>
                                        @if ($book->offer)
                                            <div class="item-price">
                                                <span class="prev-price">${{ $book->price }}</span>
                                                ${{ $book->offer->offer_price }}
                                            </div>
                                        @else
                                            <div class="item-price">${{ $book->price }}</div>
                                        @endif
                                    </figcaption>
                                </div>
                            @endforeach

                        </div><!--grid-->
                    </div>
                </div><!--inner-content-->
            </div>
        </div>
    </section>

    <hr>
    @include('fronts.layouts.footer')

    <script src="{{ asset('front_end/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="{{ asset('front_end/js/plugins.js') }}"></script>
    <script src="{{ asset('front_end/js/script.js') }}"></script>

</body>

</html>
