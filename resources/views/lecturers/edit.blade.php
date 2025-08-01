<!DOCTYPE html>
<html>
<head>
    <title>Edit Lecturer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Lecturer</h2>

    {{-- Display Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following issues:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('lecturers.update', $lecturer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $lecturer->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $lecturer->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="department" class="form-label">Department:</label>
            <input type="text" name="department" class="form-control" value="{{ old('department', $lecturer->department) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Lecturer</button>
        <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
