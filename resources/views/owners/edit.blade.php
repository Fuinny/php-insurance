@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">{{ __('Update owner\'s information') }}</h2>
    </div>
    <div class="container mb-3">
        <form method="POST" action="{{ route('owners.update', $owner->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input type="text" id="name" name="name" value="{{ $owner->name }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">{{ __('Surname') }}</label>
                <input type="text" id="surname" name="surname" value="{{ $owner->surname }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                <input type="tel" id="phone" name="phone" value="{{ $owner->phone }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input type="email" id="email" name="email" value="{{ $owner->email }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">{{ __('Address') }}</label>
                <input type="text" id="address" name="address" value="{{ $owner->address }}" class="form-control" required>
            </div>
            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                <a href="{{ route('owners.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
@endsection
