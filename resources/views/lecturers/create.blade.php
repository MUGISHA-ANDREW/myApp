<!DOCTYPE html>
<html>
<head>
    <title>Add New Lecturer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add New Lecturer</h2>

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

    <form action="{{ route('lecturers.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Full Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Department:</label>
            <input type="text" name="department" class="form-control" placeholder="Enter your department" required>
        </div>

        <!-- Replace department input with faculty selection -->
        <div class="mb-3">
            <label for="faculty_id" class="form-label">Faculty:</label>
            <select name="faculty_id" class="form-control" required>
                <option value="">-- Select Faculty --</option>
                @foreach($faculties as $faculty)
                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save Lecturer</button>
        <a href="{{ route('lecturers.index') }}" class="btn btn-primary">Back to List</a>
    </form>
</div>
</body>
</html>
