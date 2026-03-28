@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">{{ __('Add new car') }}</h2>
    </div>
    <div class="container mb-3">
        <form method="POST" action="{{ route('cars.store') }}">
            @csrf
            <div class="mb-3">
                <label for="reg_number" class="form-label">{{ __('Registration number') }}</label>
                <input type="text" id="reg_number" name="reg_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">{{ __('Brand') }}</label>
                <input type="text" id="brand" name="brand" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">{{ __('Model') }}</label>
                <input type="text" id="model" name="model" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="owner_id" class="form-label">{{ __('Owner') }}</label>
                <select id="owner_id" name="owner_id" class="form-control">
                    <option value=""></option>
                    @foreach($owners as $owner)
                        <option value="{{ $owner->id }}">
                            {{ $owner->name }} {{ $owner->surname }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                <a href="{{ route('cars.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
@endsection
