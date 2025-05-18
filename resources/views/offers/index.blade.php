@extends('layouts.app')
@section('bar-title')
    offers
@endsection


@section('title')
    offers
@endsection

@section('content')
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">offers List</h2>
            <a href="{{ route('offer_create') }}" class="btn btn-success">Add New Offer</a>
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
                    <th>Offer Price</th>
                    <th>start Date</th>
                    <th>End Date</th>
                    <th>Book Name</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>${{ number_format($item->offer_price, 1) }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>{{ $item->end_date }}</td>
                        <td>{{ $item->book->name }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>

                        <td class="display: flex;">
                            <form action="{{ route('offer_delete', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                            <a href="{{ route('offer_edit', $item->id) }}" class="btn btn-sm btn-primary"><span><i
                                        class="fas fa-edit"></i></span></a>
                            <a href="{{ route('offer_show', $item->id) }}" class="btn btn-sm btn-info">
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $offers->links('pagination::bootstrap-5') }}
    </div>
@endsection
