<?php

namespace App\Http\Controllers;
use App\Models\EmployeeSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeScheduleController extends Controller
{
    public function index()
    {
        $em = DB::table('employee_schedules')->get();
        return view('index2', compact('em'));
    }

    public function create()
    {
        $employees = DB::table('employees')->get();
        return view('create', compact('employees'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            // Add validation rules for other fields if needed
        ]);

        DB::table('employee_schedules')->insert($validatedData);

        return redirect()->route('employee-schedules.index')->with('success', 'Employee schedule created successfully');
    }

    // Implement other methods such as show, edit, update, destroy as needed
}