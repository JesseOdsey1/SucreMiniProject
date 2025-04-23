<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = ['FirstName','LastName','Gender','Birthday','MonthlySalary'];

    /** @use HasFactory<\Database\Factories\EmployeesFactory> */
    use HasFactory;
}
