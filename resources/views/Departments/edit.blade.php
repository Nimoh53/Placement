<form action="{{ route('departments.update', ['department' => $department->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $department->name) }}">

    <label>Department Head:</label>
    <input type="text" name="department_head" value="{{ old('department_head', $department->department_head) }}">

     <label>Description:</label>
    <textarea name="description">{{ old('description', $department->description) }}</textarea>

    <label>Is Active:</label>
    <select name="is_active">
        <option value="1" {{ old('is_active', $department->is_active) == 1 ? 'selected' : '' }}>Yes</option>
        <option value="0" {{ old('is_active', $department->is_active) == 0 ? 'selected' : '' }}>No</option>
    </select>

     <label>Created By:</label>
    <input type="text" name="created_by" value="{{ old('created_by', $department->created_by) }}" required>

    <button type="submit">Update</button>
</form>
