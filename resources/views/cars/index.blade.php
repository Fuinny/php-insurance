@extends('layouts.app')
@section('content')
    <h2 class="mb-4">Cars</h2>
    <div class="d-grid gap-2">
        <a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Add Car</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Registration Number</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Owner</th>
            <th>Actions</th>
        </tr>
        @forelse($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->reg_number }}</td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->owner->name }} {{ $car->owner->surname }}</td>
                <td>
                    <div class="d-flex w-100">
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-success w-50 me-1">Edit</a>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="w-50 ms-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" align="center">No owners with cars</td>
            </tr>
        @endforelse
    </table>
@endsection
