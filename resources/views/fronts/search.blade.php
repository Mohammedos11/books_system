<!DOCTYPE html>
<html lang="en">

<head>
    @include('fronts.layouts.header')
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    @include('fronts.layouts.nav-bar')
    <section id="billboard">
        <div class="container">
            <h2>Search Results for: "{{ $query }}"</h2>

            @if ($books->count() > 0)
                <div class="row">
                    @foreach ($books as $book)
                        <div class="col-md-3">
                            <div class="product-item">
                                <figure class="product-style">
                                    <img src="{{ asset('book_images/' . $book->image) }}" alt="{{ $book->name }}">
                                </figure>
                                <figcaption>
                                    <a href="{{ route('show_book', $book->id) }}">
                                        <h3>{{ $book->name }}</h3>
                                    </a>
                                    <span>{{ $book->author->name }}</span>
                                    <div class="item-price">${{ $book->price }}</div>
                                </figcaption>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No books found matching your search.</p>
            @endif
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>
