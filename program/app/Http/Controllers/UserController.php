<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function create(){
        return view('userDetails.form');
    }
    function store(Request $request)
    {
        $client = new Client;
        $client->firstname=$request->first_name;
        $client->lastname=$request->last_name;
        $client->email=$request->email;
        $client->password=$request->password;
        $request->validate([
            'first_name' => 'required|min:6|max:10',
            'last_name' => 'required|min:6|max:10',
            'email' => 'email',
            'password'=> 'required|
            min:6|
            regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|
            confirmed',
            ],[
            'first_name.required' => 'Name is Required',
            'first_name.min' => 'Name should be atleast :min characters',
            'first_name.max' => 'Name should not be greater than :max characters',
            'last_name.required' => 'Name is Required',
            'last_name.min' => 'Name should be atleast :min characters',
            'last_name.max' => 'Name should not be greater than :max characters',
            'email.required' => 'email is required',
            'password.required' => 'password is required',
            'password.min' => 'password should be atleast :min characters',
            'password.regex' => 'password should be contain alphanumeric and special characters'
            ]);
        $client->save();
        return redirect()->route('list')->with("success","Ur details submitted");
    }
    function index(){
        $client = Client :: all();
        return View::make('userDetails.userList', ['users' => $client]);
    }
    function edit($id){
        $client = Client::find($id);
        //dd($client);
        return View::make('userDetails.edit',['data' => $client]); 
    }
    function update(Request $request,$id){
        $client = Client::find($id);
        $client->firstname=$request->first_name;
        $client->lastname=$request->last_name;
        $client->email=$request->email;
        $client->password=$request->password;
        $client->update();
        return redirect()->route('list')->with("success","Ur details submitted");
    }
    function destroy($id){
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('list')->with("success","deleted sucessfully");
    }
    function dashboardCreate(){
        return view('authentication.dashboard');
    }
    function dashboardUser(){
        $age = [];
        for ($i = 18; $i < 100; $i++) {
            $age[] = $i;
        }
        $state = ["TamilNadu", "Andhra Pradesh", "Kerala", "Orisa", "Karnataka"];
        $country = ["India", "UK"];
        $hobbies = ["Singing","Dancing","Craft Making","Painting"];
        return View::make('authentication.user', ['age' => $age, 'state' => $state, 'country' => $country, 'hobbies'=> $hobbies]);
    }
    function dashboardManager(){
        return view('authentication.manager');
    }
    function dashboardAdmin(){
        return view('authentication.admin');
    }
    function dashboardNew(){
        return view('authentication.new');
    }
}
