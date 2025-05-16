@extends('layouts.app')
@section('bar-title')
    Books
@endsection


@section('title')
    Books
@endsection

@section('content')
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Books List</h2>
            <a href="{{ route('book_create') }}" class="btn btn-success">Add New Book</a>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>price</th>
                    <th>Image</th>
                    <th>Category Name</th>
                    <th>Author Name</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>${{ number_format($item->price, 1) }}</td>
                        <td><img src="{{ asset('book_images/' . $item->image) }}" alt="Book Image" width="30">
                        </td>
                        <td>
                            <span class="badge bg-info">
                                {{ $item->category_name ?? 'No Category' }}
                            </span>

                        </td>
                        <td>
                            <span class="badge bg-primary">
                                {{ $item->author_name }}
                            </span>
                        </td>


                        <td> <span class="badge bg-danger">
                                {{ $item->user_name ?? 'No Books' }}
                            </span></td>

                        <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>


                        <td class="display: flex;">
                            <form action="{{ route('book_delete', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                            <a href="{{ route('book_edit', $item->id) }}" class="btn btn-sm btn-primary"><span><i
                                        class="fas fa-edit"></i></span></a>
                            <a href="{{ route('book_show', $item->id) }}" class="btn btn-sm btn-info">
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $books->links('pagination::bootstrap-5') }}
    </div>
@endsection
