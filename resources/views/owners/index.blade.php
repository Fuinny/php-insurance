@extends('layouts.app')
@section('content')
    <h2 class="mb-4">Owners list</h2>
    <div class="d-grid gap-2">
        <a href="{{ route('owners.create') }}" class="btn btn-primary mb-3">Add Owner</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        @forelse($owners as $owner)
            <tr>
                <td>{{ $owner->id }}</td>
                <td>{{ $owner->name }}</td>
                <td>{{ $owner->surname }}</td>
                <td>{{ $owner->phone }}</td>
                <td>{{ $owner->email }}</td>
                <td>{{ $owner->address }}</td>
                <td>
                    <div class="d-flex w-100">
                        <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-success w-50 me-1">Edit</a>
                        <form action="{{ route('owners.destroy', $owner->id) }}" method="POST" class="w-50 ms-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" align="center">No owners</td>
            </tr>
        @endforelse
    </table>
@endsection
