@extends('layouts.app')
@section('bar-title')
    Dashboaerd
@endsection


@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Manage users, roles, and permissions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">View recent orders and process shipments.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Settings</h5>
                    <p class="card-text">Update site settings and preferences.</p>
                </div>
            </div>
        </div>
    @endsection
