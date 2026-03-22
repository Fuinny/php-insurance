@extends('layouts.app')
@section('content')
    <h2 class="mb-4">Edit Car</h2>
    <div class="container mb-3">
        <form method="POST" action="{{ route('cars.update', $car->id) }}">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input type="text" name="reg_number" value="{{ $car->reg_number }}" class="form-control mb-2">
            <input type="text" name="brand" value="{{ $car->brand }}" class="form-control mb-2">
            <input type="text" name="model" value="{{ $car->model }}" class="form-control mb-2">
            <select name="owner_id" class="form-control">
                <option value="">No Owner</option>
                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}" {{ $car->owner_id == $owner->id ? 'selected' : '' }}>
                        {{ $owner->name }} {{ $owner->surname }}
                    </option>
                @endforeach
            </select>
            <div class="d-grid gap-2 mt-5">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('cars.index') }}" class="btn btn-primary mb-3">Cancel</a>
            </div>
        </form>
    </div>
@endsection
