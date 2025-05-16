@extends('layouts.app')
@section('bar-title')
    Edit tag
@endsection


@section('title')
    Edit tag
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('tag_update', $tag->id) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Enter tag name" value="{{ $tag->name }}">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br>
        <br>
    @endsection
