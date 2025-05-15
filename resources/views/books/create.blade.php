@extends('layouts.app')
@section('bar-title')
    Add Book
@endsection


@section('title')
    Add New Book
@endsection

@section('content')
    <div class="container">

        <form method="POST" action="{{ route('book_store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Enter book name">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price">
                @error('price')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Image" class="form-label">Book Image Cover </label>
                <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image"
                    value="{{ old('image') }}">
                @error('image')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="author_id" class="form-label">Authors</label>
                <select name="author_id" id="author_id" class="form-control @error('author_id') is-invalid @enderror">
                    <option value="" disabled {{ old('author_id') ? '' : 'selected' }}>Select Author</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
                @error('author_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <br>
    @endsection
