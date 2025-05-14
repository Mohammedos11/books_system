@extends('layouts.app')
@section('bar-title')
    Users
@endsection


@section('title')
    Users
@endsection

@section('content')
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Users List</h2>
            <a href="{{ route('user_create') }}" class="btn btn-success">Add New User</a>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table table-bordered"> <!-- تم إضافة `table-secondary` هنا -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td><img src="{{ asset('user_images/' . $item->image) }}" alt="User Image" width="30">
                        </td>
                        <td class="text-center align-middle">
                            {{ $item->role }}
                        </td>

                        <td>{{ $item->created_at->diffForHumans() }}</td>


                        <td class="display: flex;">
                            <form action="{{ route('user_delete', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                            <a href="{{ route('user_edit', $item->id) }}" class="btn btn-sm btn-primary"><span><i
                                        class="fas fa-edit"></i></span></a>
                            <a href="{{ route('user_show', $item->id) }}" class="btn btn-sm btn-info">
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <!-- Pagination -->
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
@endsection
