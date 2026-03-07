@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Add new Owner</h2>
    </div>
    <div class="container mb-3">
        <form method="POST" action="{{ route('owners.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
            <input type="text" name="surname" placeholder="Surname" class="form-control mb-2" required>
            <input type="text" name="phone" placeholder="Phone" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="text" name="address" placeholder="Address" class="form-control mb-2" required>
            <div class="d-grid gap-2 mt-5">
                <button class="btn btn-primary">Save</button>
                <a href="{{ route('owners.index') }}" class="btn btn-primary mb-3">Cancel</a>
            </div>
        </form>
    </div>
@endsection
