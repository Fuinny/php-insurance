@extends('layouts.app')
@section('content')
    <h2 class="mb-4">Update Owner information</h2>
    <div class="container mb-3">
        <form method="POST" action="{{ route('owners.update', $owner->id) }}">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $owner->name }}" class="form-control mb-2">
            <input type="text" name="surname" value="{{ $owner->surname }}" class="form-control mb-2">
            <input type="text" name="phone" value="{{ $owner->phone }}" class="form-control mb-2">
            <input type="email" name="email" value="{{ $owner->email }}" class="form-control mb-2">
            <input type="text" name="address" value="{{ $owner->address }}" class="form-control mb-2">
            <div class="d-grid gap-2 mt-5">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('owners.index') }}" class="btn btn-primary mb-3">Cancel</a>
            </div>
        </form>
    </div>
@endsection
