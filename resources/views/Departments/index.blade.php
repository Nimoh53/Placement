@section('content')
    <h1>Departments</h1>



    <a href="{{ route('departments.create') }}">+ Add New Department</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th> Department-Head</th>
                <th>Description</th>
                <th>Active</th>
                <th>Created By</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->department_head }}</td>
                    <td>{{ $department->description }}</td>
                    <td>{{ $department->is_active ? 'Yes' : 'No' }}</td>
                    <td>{{ $department->created_by }}</td>
                    <td>
                        <a href="{{ route('departments.edit', $department->id) }}">Edit</a>

                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">No departments found.</td></tr>
            @endforelse
        </tbody>
    </table>

     @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
