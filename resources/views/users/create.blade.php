<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create users</title>
</head>

<body>
    <h1>Create User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div>
            <label for="email_address">Email Address:</label>
            <input type="email" id="email_address" name="email_address" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>
        </div>
        <div>
            <label for="created_by">Created by:</label>
            <input type="text" id="created_by" name="created_by" required>
        </div>

        <div>
            <input type="checkbox" id="is_active" name="is_active" value="1" checked>
            <label for="is_active">Active</label>
        </div>
        <div>
            <label for="cohort">Cohort:</label>
            <input type="text" id="cohort" name="cohort" required>
        </div>
        <button type="submit">Create User</button>
    </form>

</body>

</html>