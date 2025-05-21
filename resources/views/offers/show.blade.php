@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow rounded-4">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">Book To Offer :{{ $offer->book->name }}</h3>
                        <p><strong>Created:</strong> {{ $offer->start_date }}</p>
                        <p><strong>Created:</strong> {{ $offer->end_date }}</p>
                        <a href="{{ route('tag_index') }}" class="btn btn-outline-primary mt-3">
                            <i class="fas fa-arrow-left"></i> Back to Offers
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
