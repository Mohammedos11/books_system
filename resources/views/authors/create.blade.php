@extends('layouts.app')
@section('bar-title')
    Add authors
@endsection


@section('title')
    Add New author
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('author_store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Enter authors name">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <br>
    @endsection
