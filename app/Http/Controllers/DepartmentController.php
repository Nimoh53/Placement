<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'department_head' => 'required|string|max:150',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'created_by' => 'required|string|max:150',
        ]);

        // Create a new department
        Department::create($request->all());

        // Redirect to the department index with a success message
        return redirect()->route('departments.index')->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
       
    return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
          $validated = $request->validate([
        'name' => 'required|string|max:255',
        'department_head' => 'required|string|max:150',
        'description' => 'nullable|string',
        'is_active' => 'boolean',
        'created_by' => 'required|string|max:150',
    ]);

    // Update department using validated data
    $department->update($validated);

    // Redirect with success message
    return redirect()->route('departments.index')->with('success', 'Department updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
         $department->delete();
        return redirect()->route('departments.destroy')->with('success', 'Department deleted.');
    }
}
