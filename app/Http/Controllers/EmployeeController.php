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
}
