@extends('layouts.app')
@section('content')
    <h2 class="mb-4">Add Car</h2>
    <form method="POST" action="{{ route('cars.store') }}">
        @csrf
        <input type="text" name="reg_number" placeholder="Registration Number" class="form-control mb-2">
        <input type="text" name="brand" placeholder="Brand" class="form-control mb-2">
        <input type="text" name="model" placeholder="Model" class="form-control mb-2">
        <select name="owner_id" class="form-control mb-2">
            <option value="">No Owner Selected</option>
            @foreach($owners as $owner)
                <option value="{{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</option>
            @endforeach
        </select>
        <div class="d-grid gap-2 mt-5">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('cars.index') }}" class="btn btn-primary mb-3">Cancel</a>
        </div>
    </form>
@endsection
