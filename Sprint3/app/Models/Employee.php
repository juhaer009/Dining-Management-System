<?php
namespace App\Models;

use App\EmployeeSchedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address', 'salary'];

    public function schedules()
{
    return $this->hasMany(EmployeeSchedule::class);
}
    // Add relationships or other methods as needed
}
