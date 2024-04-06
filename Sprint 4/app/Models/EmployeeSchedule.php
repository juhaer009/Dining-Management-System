<?php

namespace App;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class EmployeeSchedule extends Model
{
    protected $fillable = [
        'employee_id',
        'start_time',
        'end_time',
        // Add other fields as needed
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}