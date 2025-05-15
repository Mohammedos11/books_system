@extends('layouts.app')
@section('bar-title')
    Categories
@endsection


@section('title')
    Categories
@endsection

@section('content')
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Categories List</h2>
            <a href="{{ route('category_create') }}" class="btn btn-success">Add New Category</a>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>

                        <td class="display: flex;">
                            <form action="{{ route('category_delete', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                            <a href="{{ route('category_edit', $item->id) }}" class="btn btn-sm btn-primary"><span><i
                                        class="fas fa-edit"></i></span></a>
                            <a href="{{ route('category_show', $item->id) }}" class="btn btn-sm btn-info">
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <!-- Pagination -->
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>
@endsection
