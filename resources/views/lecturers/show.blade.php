<!DOCTYPE html>
<html>
<head>
    <title>Lecturer Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Lecturer Details</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $lecturer->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $lecturer->email }}</p>
            <p class="card-text"><strong>Department:</strong> {{ $lecturer->department }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $lecturer->created_at->format('d M Y, h:i A') }}</p>
        </div>
    </div>

    <a href="{{ route('lecturers.index') }}" class="btn btn-success mt-3">← Back to List</a>
    <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-dark mt-3">Edit</a>
</div>
</body>
</html>
