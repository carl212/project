<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectionController extends Controller
{
   
    public function showAge(Request $request){
        $age = $request->input('Input');
        return view('inputName', compact('name'));
    }
}
