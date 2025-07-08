<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();
        // Pass the users to the view
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new user
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_number' => 'required|string|max:30',
            'cohort' => 'nullable|string|max:150',
            'email_address' => 'required|email|max:200|unique:users,email_address',
            'password' => 'required|string',
            'created_by' => 'required|string|max:200',
            'is_active' => 'boolean',
        ]);

        // Create a new user
        User::create($request->all());

        // Redirect to the users index with a success message
        return redirect()->route('users.index')->with('success', 'User created successfully.');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

    return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    'first_name' => 'required|string|max:50',
    'last_name' => 'required|string|max:50',
    'phone_number' => 'required|string|max:30',
    'email_address' => 'required|email|unique:users,email_address,' . $id,
    'cohort' => 'required|string|max:50',
    'password' => 'required|string|max:20',
    'is_active' => 'required|boolean',
    'created_by' => 'required|string|max:50',

    ]);

    $user = User::findOrFail($id);
    $user->first_name = $request->input('first_name');
    $user->last_name = $request->input('last_name');
    $user->phone_number = $request->input('phone_number');
    $user->email_address = $request->input('email_address');
    $user->cohort = $request->input('cohort');
    $user->password = bcrypt($request->input('password')); // always hash passwords
    $user->is_active = $request->input('is_active');
    $user->created_by = $request->input('created_by');

    $user->save();

    return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $user = User::findOrFail($id);
         $user->delete();

    return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
