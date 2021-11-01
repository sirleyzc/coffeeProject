<?php

namespace App\Http\Controllers;

use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index(){
        $employee = Employee::all();
        return [
            'emp'=>$employee
        ];
    }

    public function store(Request $request){
        $employee = new Employee();
        $employee->idEmployee = $request->id;
        $employee->namEmployee = $request->name;
        $employee->phone = $request->phone;
        $employee->address = $request->addr;
        $employee->datAdmission = $request-> date;

        $employee->save();
    }

    public function update(Request $request){
        $employee = Employee::findOrFail($request->id);
        $employee->idEmployee = $request->idEmp;
        $employee->namEmployee = $request->name;
        $employee->phone = $request->phone;
        $employee->address = $request->addr;
        $employee->datAdmission = $request->date;

        $employee->save();
    }

    public function destroy(Request $request){
        $employee = Employee::findOrFail($request->id);
        $employee->delete();
    }

    public function getEmployee(){
        $employee = Employee::select('idEmployee','namEmployee')
        ->get();
        return [
            'emp'=>$employee
        ];
    }
}
