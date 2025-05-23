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

            <!-- Book Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}" placeholder="Enter book name">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                    cols="30" rows="5">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Book Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Book Image Cover</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @error('image')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Category -->
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

            <!-- Author -->
            <div class="mb-3">
                <label for="author_id" class="form-label">Author</label>
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

            <!-- Tags -->
            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select class="form-control select2 @error('tags') is-invalid @enderror" id="tags" name="tags[]"
                    multiple="multiple">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}"
                            {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }}>
                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select>
                @error('tags')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('js')
     <script>
        $(document).ready(function() {
            $('#tags').select2({
                placeholder: "Select tags",
                allowClear: true
            });
        });
    </script>
@endsection
