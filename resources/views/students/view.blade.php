<!DOCTYPE html>
<html>
<head>
    <title>View Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Student Details</h2>

    @if ($student)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $student->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                <p class="card-text"><strong>Course:</strong> {{ $student->course }}</p>
                <p class="card-text"><strong>Created At:</strong> {{ $student->created_at->format('d M Y, h:i A') }}</p>
            </div>
        </div>
    @else
        <div class="alert alert-danger mt-3">
            Student not found.
        </div>
    @endif

    <a href="{{ route('students.index') }}" class="btn btn-primary mt-4">← Back to Student List</a>
</div>
</body>
</html>
