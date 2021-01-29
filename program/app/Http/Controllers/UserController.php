<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\View;
class UserController extends Controller
{
    function create(){
        return view('userDetails.index');
    }
    function store(Request $request)
    {
        $userModel = new UserModel;
        $userModel->firstname=$request->first_name;
        $userModel->lastname=$request->last_name;
        $userModel->email=$request->email;
        $userModel->password=$request->password;
        $userModel->save();
        return redirect()->route('list')->with("success","ur form submitted");
    }
    function index(){
        $userModel = UserModel :: all();
        return View::make('userDetails.userList', ['users' => $userModel]);
    }
    function edit(){
        return view('userDetails.index');
    }
}
