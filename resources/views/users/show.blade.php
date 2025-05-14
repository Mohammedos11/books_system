@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow rounded-4">
            <div class="row g-0">
                <div class="col-md-4 text-center p-4">
                    @if ($user->image)
                        <img src="{{ asset('user_images/' . $user->image) }}" alt="User Image"
                            class="img-fluid rounded-circle border border-3"
                            style="width: 200px; height: 200px; object-fit: cover;">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-3">{{ $user->name }}</h3>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p>
                            <strong>Role:</strong>
                            <span class="badge bg-{{ $user->role === 'admin' ? 'success' : 'secondary' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </p>
                        <p><strong>Created:</strong> {{ $user->created_at->diffForHumans() }}</p>

                        <a href="{{ route('user_index') }}" class="btn btn-outline-primary mt-3">
                            <i class="fas fa-arrow-left"></i> Back to Users
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
