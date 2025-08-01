<!DOCTYPE html>
<html>
<head>
    <title>Create Faculty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Create New Faculty</h2>

    <form action="{{ route('faculties.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Faculty Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Faculty Code</label>
            <input type="text" name="faculty_code" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Head of Department</label>
            <input type="text" name="department" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Faculty</button>
        <a href="{{ route('faculties.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>   
</html>
