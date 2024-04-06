<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('index', compact('employees'));
    }
    public function editSalary($id)
{
    $employee = Employee::find($id);
    // Retrieve employee's salary or use your logic to fetch salary data

    return view('edit-salary', compact('employee'));
}

public function updateSalary(Request $request, $id)
{
    // Fetch the employee by ID
    $employee = Employee::find($id);
    
    if (!$employee) {
        return redirect()->route('employee-information')->with('error', 'Employee not found');
    }

    // Validate and update the salary data based on the form input
    $validatedData = $request->validate([
        'current_salary' => 'required|numeric', // Add other validation rules if needed
    ]);

    // Update the employee's salary
    $employee->salary = $validatedData['current_salary'];
    $employee->save();

    // Retrieve all employees after updating the salary
    $employees = Employee::all();

    // Redirect to the employee information view with success message
    return view('index', compact('employees'))->with('success', 'Employee salary updated successfully');
}

public function create()
{
    return view('employees.create'); // Assuming you have a view file named 'create' inside 'resources/views/employees' folder.
}
public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees,email',
            'job_title' => 'required|string',
            'salary' => 'required|numeric',
        ]);

        // Create the employee
        Employee::create($validatedData);

        // Redirect to a success page or wherever you need
        return redirect()->route('indexview')->with('success', 'Employee added successfully.');
    }
// Implement other CRUD methods (create, edit, update, delete) as needed
}