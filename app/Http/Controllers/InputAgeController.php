<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputAgeController extends Controller
{
   
    public function showAge(Request $request){
        $age = $request->input('InputAge');
        return view('inputAge', compact('age'));

  



    }
}
