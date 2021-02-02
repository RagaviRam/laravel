<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    function create()
    {
        $age = [];
        for ($i = 18; $i < 100; $i++) {
            $age[] = $i;
        }
        $state = ["TamilNadu", "Andhra Pradesh", "Kerala", "Orisa", "Karnataka"];
        $country = ["India", "UK"];
        return View::make('employee.form', ['age' => $age, 'state' => $state, 'country' => $country]);
    }
    function store(Request $request)
    {

        $request->validate([
            'firstname' => 'required|min:6|max:10',
            'lastname' => 'required|min:6|max:10',
            'gender' => 'required|in:male,female,others',
            'city' => 'required',
            'age' => 'required|min:1',
            'state' => 'required|min:1',
            'country' => 'required|min:1',
            'phne_num' => 'required|min:10',
            'pincode' => 'required|min:6',
            'dob' => 'required',
            'email' => 'email',
            'password' => 'min:6|regex:/[@$!%*#?&]/'
        ], [
            'firstname.required' => 'Name is Required',
            'firstname.min' => 'Name should be atleast :min characters',
            'firstname.max' => 'Name should not be greater than :max characters',
            'lastname.required' => 'Name is Required',
            'lastname.min' => 'Name should be atleast :min characters',
            'lastname.max' => 'Name should not be greater than :max characters',
            'gender.required' => 'Gender is required',
            'gender.in' => 'Pick the gender',
            'city.required' => "City is required",
            'age.required' => 'Age is required',
            'age.min' => 'select the age :min characters',
            'state.required' => 'state is required',
            'state.min' => 'select the state :min characters',
            'country.required' => 'country is required',
            'country.min' => 'select the country :min characters',
            'phne_num.required' => 'Phone number is required',
            'pincode.required' => "Pincode is required",
            'pincode.min' =>  'Phone number should not be greater than 6',
            'dob.required' => "Date of birth is required",
            'email.required' => 'email is required',
            'password.required' => 'password is required',
            'password.min' => 'password should be atleast :min characters',
            'password.regex' => 'password must be contain alphanumeric'
        ]);
        $employee = new Employee;
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->gender = $request->gender;
        $employee->city = $request->city;
        $employee->age = $request->age;
        $employee->state = $request->state;
        $employee->country = $request->country;
        $employee->phonenumber = $request->phne_num;
        $employee->pincode = $request->pincode;
        $employee->dateofbirth = $request->dob;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);

        $employee->save();
        return redirect()->route('list')->with("success", "Ur details submitted");
    }
    function index()
    {
        $employee = Employee::all();
        $employee = Employee::orderby("firstname", "asc")->paginate(5);
        return View::make('employee.list', ['users' => $employee]);
    }
    function edit($id)
    {
        $age = [];
        for ($i = 18; $i < 100; $i++) {
            $age[] = $i;
        }
        $state = ["TamilNadu", "Andhra Pradesh", "Kerala", "Orisa", "Karnataka"];
        $country = ["India", "UK"];
        $employee = Employee::find($id);
        return View::make('employee.edit', ['data' => $employee, 'age' => $age, 'state' => $state, 'country' => $country]);
    }
    function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->gender = $request->gender;
        $employee->city = $request->city;
        $employee->age = $request->age;
        $employee->state = $request->state;
        $employee->country = $request->country;
        $employee->phonenumber = $request->phne_num;
        $employee->pincode = $request->pincode;
        $employee->dateofbirth = $request->dob;
        $employee->email = $request->email;
        $employee->password = Hash::make($request->password);
        $employee->update();
        return redirect()->route('list')->with("success", "Ur details updated");
    }
    function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('list')->with("success", "deleted sucessfully");
    }
}
