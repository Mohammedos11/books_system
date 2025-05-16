@extends('layouts.app')

@section('bar-title')
    Edit Book
@endsection

@section('title')
    Edit Book
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('book_update', $book->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ $book->name }}" placeholder="Enter book name">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ $book->price }}">
                @error('price')
                    <div class="invalid-feedback
                    d-block">{{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                    cols="30" rows="5">{{ $book->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Book Image Cover</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                @if ($book->image)
                    <img src="{{ asset('book_images/' . $book->image) }}" alt="Book Image" class=""
                        style="width: 100px; height: 100px; object-fit: cover; margin-top: 5px">
                @endif
                @error('image')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror

            </div>



            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    <option value="" disabled {{ old('category_id', $book->category_id) ? '' : 'selected' }}>Select
                        Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>
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
                    <option value="" disabled {{ old('author_id', $book->author_id) ? '' : 'selected' }}>
                        Select Author :</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
                @error('author_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select class="form-control select2 @error('tags') is-invalid @enderror" id="tags" name="tags[]"
                    multiple="multiple">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}"
                            {{ in_array($tag->id, old('tags', $book->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select>
                @error('tags')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
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
