<!DOCTYPE html>
<html>
<head>
    <title>Edit Faculty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Faculty</h2>

    <form action="{{ route('faculties.update', $faculty->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Faculty Name</label>
            <input type="text" name="name" value="{{ old('name', $faculty->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Faculty Code</label>
            <input type="text" name="faculty_code" value="{{ old('faculty_code', $faculty->faculty_code) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Head of Department</label>
            <input type="text" name="head_of_department" value="{{ old('head_of_department', $faculty->head_of_department) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $faculty->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Faculty</button>
        <a href="{{ route('faculties.index') }}" class="btn btn-secondary" class="bg-primary">Back</a>
    </form>
</div>
</body>
</html>
