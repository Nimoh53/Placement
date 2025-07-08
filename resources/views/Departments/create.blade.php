<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create users</title>
</head>

<body>
    <h1>Create Department</h1>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="department_head">Department_head:</label>
            <input type="text" id="department_head" name="department_head" required>
        </div>
        <div>
            <label for="description">Descriptions:</label>
            <input type="description" id="description" name="description" required>
        </div>
           <div>
            <input type="checkbox" id="is_active" name="is_active" value="1" checked>
            <label for="is_active">Active</label>
        </div>
      
        <div>
            <label for="created_by">Created by:</label>
            <input type="text" id="created_by" name="created_by" required>
        </div>
        <button type="submit">Create Department</button>
    </form>

</body>

</html>
