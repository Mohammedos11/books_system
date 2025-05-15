@extends('layouts.app')
@section('bar-title')
    Add Category
@endsection


@section('title')
    Add New Category
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('category_store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Enter Category name">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <br>
    @endsection
