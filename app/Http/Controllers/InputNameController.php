<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputNameController extends Controller
{
   
    public function showName(Request $request){
        $name = $request->input('InputName');
        return view('inputName', compact('name'));

    

    }
}
