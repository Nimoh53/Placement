

@section('content')
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>First_name:</label>
    <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}">

    <label>Last_name:</label>
    <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}">

    <label>Phone Number:</label>
    <input type="text" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}">

    <label>Email:</label>
    <input type="email" name="email_address" value="{{ old('email_address', $user->email_address) }}">

    <label>Cohort:</label>
    <input type="text" name="cohort" value="{{ old('cohort', $user->cohort) }}">

    <label>Password:</label>
    <input type="password" name="password">

    <label>Is Active:</label>
    <select name="is_active">
        <option value="1" {{ old('is_active', $user->is_active) == 1 ? 'selected' : '' }}>Yes</option>
        <option value="0" {{ old('is_active', $user->is_active) == 0 ? 'selected' : '' }}>No</option>
    </select>

    <label>Created By:</label>
    <input type="text" name="created_by" value="{{ old('created_by', $user->created_by) }}">

    <button type="submit">Update</button>
</form>
