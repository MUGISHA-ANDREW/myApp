<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add New Student</h2>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Student Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label for="course" class="form-label">Course:</label>
            <input type="text" name="course" class="form-control" placeholder="Enter course name" value="{{ old('course') }}">
        </div>

        <button type="submit" class="btn btn-success">Save Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
