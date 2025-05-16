@extends('layouts.app')
@section('bar-title')
    Add Offer
@endsection


@section('title')
    Add New Offer
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('offer_store') }}">
            @csrf
            <div class="mb-3">
                <label for="offer_price" class="form-label">offer_price</label>
                <input type="text" name="offer_price" class="form-control @error('offer_price') is-invalid @enderror"
                    id="offer_price" placeholder="Enter Offer offer_price">
                @error('offer_price')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="book_id" class="form-label">book</label>
                <select name="book_id" id="book_id" class="form-control @error('book_id') is-invalid @enderror">
                    <option value="" disabled {{ old('book_id') ? '' : 'selected' }}>Select book</option>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>
                            {{ $book->name }}
                        </option>
                    @endforeach
                </select>
                @error('book_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" id="start_date"
                    class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}">
                @error('start_date')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" id="end_date"
                    class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}">
                @error('end_date')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <br>
    @endsection
