@extends('layouts.app')
@section('content')
    <h2 class="mb-4">Edit Car</h2>
    <div class="contrainer mb-3">
        <form method="POST" action="{{ route('cars.update', $car->id) }}">
            @csrf
            @method('PUT')
            <input type="text" name="reg_number" value="{{ $car->reg_number }}" class="form-control mb-2">
            <input type="text" name="brand" value="{{ $car->brand }}" class="form-control mb-2">
            <input type="text" name="model" value="{{ $car->model }}" class="form-control mb-2">
            <select name="owner_id" class="form-control mb-2">
                <option value=""></option>
                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</option>
                @endforeach
            </select>
            <div class="d-grid gap-2 mt-5">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('cars.index') }}" class="btn btn-primary mb-3">Cancel</a>
            </div>
        </form>
    </div>
@endsection
