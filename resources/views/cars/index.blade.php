@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">{{ __('List of cars') }}</h2>
    </div>
    @auth
        @if(auth()->user()->type === 'admin')
            <div class="container d-grid gap-2">
                <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">{{ __('Add new car') }}</a>
            </div>
        @endif
    @endauth
    <div class="container mb-3">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>{{ __('Registration number') }}</th>
                <th>{{ __('Brand') }}</th>
                <th>{{ __('Model') }}</th>
                <th>{{ __('Owner') }}</th>
                @auth
                    @if(auth()->user()->type === 'admin')
                        <th>{{ __('Actions') }}</th>
                    @endif
                @endauth
            </tr>
            @forelse($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->reg_number }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->owner->name }} {{ $car->owner->surname }}</td>
                    @auth
                        @if(auth()->user()->type === 'admin')
                            <td>
                                <div class="d-flex w-100">
                                    <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-success w-50 me-1">{{ __('Edit') }}</a>
                                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="w-50 ms-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-danger w-100"
                                                onclick="return confirm('Are you sure?')">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                            </td>
                        @endif
                    @endauth
                </tr>
            @empty
                <tr>
                    <td colspan="7" align="center">{{ __('No cars') }}</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
