<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>
</head>

<body>

  @if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

    <h1>Users List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Cohort</th>
                <th>Created By</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->email_address }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->cohort }}</td>
                <td>{{ $user->created_by }}</td>
                <td>

                 <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</form>

</body>

</html>
