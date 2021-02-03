<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Carbon\Carbon;
class ImageController extends Controller
{
    function create(){
        
        return view('file.form');
    }
    function store(Request $request){
        //dd($request->all());
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ],
        [
            'image.required' => '*Image is Required',
            'image.image' => '*Upload image only',
            'image.mimes' => '*Image must be supported format'
        ]
    );
        
        $fileExtension = $request->image->extension();
        $timeStamp=Carbon::now()->format('Y_m_d_H_i_s');
        $fileName = $timeStamp.'.'.$fileExtension;
        $image = new Image;
        $image->image = $fileName;
        $image->save();
        //return redirect()->route('image');
        
    }
    function image(){

        dd(asset('storage/images'));
    }
    
}
