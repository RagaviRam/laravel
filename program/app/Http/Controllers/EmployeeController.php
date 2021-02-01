<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    function create(){
        $age = [];
        for($i = 18; $i<100; $i++) {
            $age[] = $i;
        }
        $state = ["TamilNadu", "Andhra Pradesh", "Kerala","Orisa","Karnataka"];
        $country = ["India","UK"];
        return View::make('employee.form', ['age' => $age,'state' => $state,'country' => $country]);
    }
    function store(Request $request){
        $employee = new Employee;
        $employee ->firstname=$request->firstname;
        $employee->lastname=$request->lastname;
        $employee->gender=$request->gender;
        $employee->city=$request->city;
        $employee->age=$request->age;
        $employee->state=$request->state;
        $employee->country=$request->country;
        $employee->phonenumber=$request->phne_num;
        $employee->pincode=$request->pincode;
        $employee->dateofbirth=$request->dob;
        $employee->email=$request->email;
        $employee->password=$request->password;
        $employee->save();
        return redirect()->route('list')->with("success","Ur details submitted");    
    }
    function index(){
        $employee = Employee :: all();
        return View::make('employee.list', ['users' => $employee]);
    }
    function edit($id){
        $employee = Employee::find($id);
        return View::make('employee.edit',['data' => $employee]); 
    }
    function update(Request $request,$id){
        $employee = Employee::find($id);
        $employee ->firstname=$request->firstname;
        $employee->lastname=$request->lastname;
        $employee->gender=$request->gender;
        $employee->city=$request->city;
        $employee->age=$request->age;
        $employee->state=$request->state;
        $employee->country=$request->country;
        $employee->phonenumber=$request->phne_num;
        $employee->pincode=$request->pincode;
        $employee->dateofbirth=$request->dob;
        $employee->email=$request->email;
        $employee->password=$request->password;
        $employee->update();
        return redirect()->route('list')->with("success","Ur details submitted");
    }
}
