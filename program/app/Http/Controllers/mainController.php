<?php


namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class mainController extends Controller
{
    function myFunction(){
        echo "I am rohinipriya";
    }
    function form(){
        return view('form');
    }
    function store(Request $request)
    {
        $myModel = new MyModel;
        $myModel->name=$request->name;
        $myModel->address=$request->address;
        $myModel->pincode=$request->number;
        $myModel->save();
        return redirect()->route('student_list')->with("success","done");
        /* $name = $request->input('name');
        $address = $request->input('address');
        $pincode = $request->input('pincode'); */
        /* dd($request -> all()); */

        //
    }

        /* //echo "This is test form";
        
        print_r($_POST);
        $pincode = $_POST["number"];
        $pincode1 = $_POST["number1"];
        
        if($_POST["number"]%2 == 0){
            echo "the pincode is even";
        }
        else{
            echo "the pincode is not even";
        }
        for($value=$pincode ;$value<=$pincode1;$value++){
            echo ($value)."<br>";
        } */

       /*  DB::table('new_models')->insertOrIgnore([
           
            /* ['name' => 'ragavi',
            'address' => 'chennai',
            'pincode' => "626117"],
            ['name' => "reesshu",
            'address' => "andhra",
            'pincode' => "890765"],
            ['name' => "rohini",
            'address' => "thiruvannamalai",
            'pincode' => 789234] */
       /*  ]);  */ 
        
    
    function ifCondition() {
        return View::make('nestedView.if');
    }
    function forCondition(){
        return View::make('nestedView.for');
    } 
    function foreachCondition(){
        return View::make('nestedView.foreach');
    } 
    function whileCondition(){
        return View::make('nestedView.while');
    } 
    function switchCondition(){
        return View::make('nestedView.switch');
    } 
    function studentLists(){
        //$users = DB::table('new_models')->get();
        $myModel = MyModel :: orderby("name","desc")->paginate(10);
        /* $myModel = myModel :: all(); */
        
        
        //dd($myModel);
        //$users = DB::table('new_models')->where('pincode', 626117)->get();
        /* //$users = DB::table('new_models')
                ->orderBy('name', 'asc')
                ->orderBy('pincode', 'desc')
                ->get(); */
        /* $user = DB::table('new_models')
            ->latest()
            ->first(); */
            /* DB::table('new_models')
            ->where('pincode', 626117)
            ->update(['name' => 'ragavi ram']); */
            $user = DB::table('new_models')->max('pincode');
            $cuser =  DB::table('new_models')->count('pincode');
            echo "The total number of pincode $cuser" . "<br>";
            echo "The maximum integer of pincode $user"."<br>";
        return view('student.studentList', ['users' => $myModel]);
        
    }
}
