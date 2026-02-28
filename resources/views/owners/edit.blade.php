<!DOCTYPE html>
<html>
<head>
    <title>Edit Owner</title>
    @vite(['resources/sass/app.scss'])
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Update Owner information</h2>
    </div>
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
                <a href="{{ route('owners.index') }}" class="btn btn-primary mb-3">Go Back</a>
            </div>
        </form>
    </div>
</body>
</html>
