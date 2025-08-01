<!DOCTYPE html>
<html>
<head>
    <title>View Faculty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Faculty Details</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $faculty->name }}</h4>
            <p><strong>Faculty Code:</strong> {{ $faculty->faculty_code }}</p>
            <p><strong>Head of Department:</strong> {{ $faculty->department }}</p>
            <p><strong>Description:</strong><br>{{ $faculty->description }}</p>
        </div>
    </div>

    <a href="{{ route('faculties.index') }}" class="btn btn-success mt-3">← Back to List</a>
    <a href="{{ route('lecturers.edit', $faculty->id) }}" class="btn btn-dark mt-3">Edit</a>
</div>
</body>
</html>
