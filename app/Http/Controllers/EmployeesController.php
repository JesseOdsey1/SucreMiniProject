<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    //
    public function index() {

        $employees = Employees::orderBy('created_at', 'asc')->paginate(10);
        return view('employees.index', ["employees" => $employees]);
      }
  
      public function show(Employees $employee) {
        return view('employees.employee',["employee" => $employee]);
      }
  
      public function add(){
        return view('employees.add');
      }

      public function edit(Employees $employee) {
        return view('employees.edit', ["employee" => $employee]);
      }
  
      public function save(Request $request) {
        $validated = $request->validate([
            'FirstName' => 'required|String',
            'LastName' => 'required|String',
            'Gender' => 'required|String|in:Male,Female',
            'Birthday' => 'required|date_format:Y-m-d|before:today',
            'MonthlySalary' => 'required|integer|min:0',
        ]);

        Employees::create($validated);
        return redirect()->route('employees.index')->with('Success', 'Employee Added');
      }

      public function edited(Request $request, Employees $employee) {
        $validated = $request->validate([
            'FirstName' => 'required|String',
            'LastName' => 'required|String',
            'Gender' => 'required|String|in:Male,Female',
            'Birthday' => 'required|date_format:Y-m-d|before:today',
            'MonthlySalary' => 'required|integer|min:0',
        ]);

        Employees::where('id',$employee->id)->limit(1)->update($validated);
        return redirect()->route('employees.index')->with('Success', 'Employee Edited');
      }
  
      public function delete(Employees $employee) {
        $employee->delete();
        return redirect()->route('employees.index')->with('Success', 'Employee Removed');;
      }

      public function summary(){
        $maleCount = Employees::where('Gender','Male')->count();
        $femaleCount = Employees::where('Gender','Female')->count();
        $totalSalary = Employees::sum('MonthlySalary');
        return view('employees.summary', ['maleCount' => $maleCount,'femaleCount' => $femaleCount,'totalSalary' => $totalSalary]);
      }
  
}
