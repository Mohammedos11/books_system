@extends('layouts.app')
@section('bar-title')
    Show Books
@endsection
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="row g-0">
                        <!-- Book Image -->
                        <div class="col-md-5">
                            <img src="{{ asset('book_images/' . $book->image) }}" class="img-fluid rounded-start"
                                alt="{{ $book->name }}">
                        </div>
                        <!-- Book Details -->
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="card-title">{{ $book->name }}</h3>
                                <p class="card-text text-muted">{{ $book->description }}</p>
                                <hr>
                                <div class="mb-2">
                                    <span class="badge bg-primary">Category: {{ $book->category->name ?? 'N/A' }}</span>
                                    <span class="badge bg-secondary">Author: {{ $book->author->name ?? 'N/A' }}</span>
                                </div>
                                <h4 class="text-success mt-3">${{ number_format($book->price, 1) }}</h4>
                                <p class="text-muted"><small>Added {{ $book->created_at->diffForHumans() }}</small></p>
                                <a href="{{ route('book_index') }}" class="btn btn-outline-primary mt-3">Back to Books</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
