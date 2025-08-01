<!DOCTYPE html>
<html>
<head>
    <title>Faculty List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>All Faculties</h2>

    <a href="{{ route('faculties.create') }}" class="btn btn-primary mb-3">+ Add New Faculty</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Faculty Code</th>
                <th>Department</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faculties as $faculty)
            <tr>
                <td>{{ $faculty->name }}</td>
                <td>{{ $faculty->faculty_code }}</td>
                <td>{{ $faculty->department }}</td>
                <td>{{ $faculty->description }}</td>
                <td>
                    <a href="{{ route('faculties.show', $faculty->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('faculties.edit', $faculty->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('faculties.destroy', $faculty->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
