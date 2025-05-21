@extends('layouts.app')
@section('bar-title')
    Dashboard
@endsection

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-white mb-3 shadow-lg"
                style="background: linear-gradient(135deg, #6f42c1, #b57fcf); border-radius: 15px;">
                <div class="card-body d-flex flex-column align-items-center text-center">
                    <i class="bi bi-people-fill fs-1 mb-3"></i> <!-- Bootstrap icon -->
                    <h5 class="card-title fw-bold">Users</h5>
                    <p class="card-text">Manage users, roles, and permissions.</p>
                    <a href="{{ route('user_index') }}" class="btn btn-light mt-auto">Go to Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white mb-3 shadow-lg"
                style="background: linear-gradient(135deg, #198754, #5cd65c); border-radius: 15px;">
                <div class="card-body d-flex flex-column align-items-center text-center">
                    <i class="bi bi-cart-fill fs-1 mb-3"></i>
                    <h5 class="card-title fw-bold">Books</h5>
                    <p class="card-text">View recent books and process shipments.</p>
                    <a href="{{ route('book_index') }}" class="btn btn-light mt-auto">Go to Books</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-dark mb-3 shadow-lg"
                style="background: linear-gradient(135deg, #ffc107, #ffdd57); border-radius: 15px;">
                <div class="card-body d-flex flex-column align-items-center text-center">
                    <i class="bi bi-gear-fill fs-1 mb-3"></i>
                    <h5 class="card-title fw-bold">Offers</h5>
                    <p class="card-text">Update site Offers and preferences.</p>
                    <a href="{{ route('offer_index') }}" class="btn btn-dark mt-auto">Go to Offers</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h3 class="mt-4">Latest Users</h3>

    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-3 align-middle">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registered At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ route('user_show', $item->id) }}"
                                style="text-decoration: none">{{ $item->name }}</a></td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links('pagination::bootstrap-5') }}

    </div>
@endsection
