<?php

namespace App\Http\Controllers;
use App\Models\ontime;
use Illuminate\Http\Request;

class OntimeController extends Controller
{
   public function index()
    {

        $Payors = ontime::orderBy('id', 'desc')->paginate(5);
        return view('Payors.index', compact('Payors'));
    }

    public function create()
    {
        return view('Payors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'remarks'=>'required',
        
        ]);

        ontime::create($request->post());
        return redirect()->route('Payors.index')->with('success',' Successfully added');
    }

    public function show(ontime $Ontime)
    {
       return view('Payors.show', compact('Ontime'));
    }

    public function edit(ontime $Ontime)
    {
       return view('Payors.edit', compact('Ontime'));
    }

    public function update(Request $request, ontime $Ontime)
    {
       $request->validate([
            'name'=>'required',
            'date'=>'required',
            'amount'=>'required',
            'remarks'=>'required'
        ]);

        $Ontime->fill([
            'name' => $request->name,
            'date' => $request->date,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
            
        ])->save();


       return redirect()->route('Payors.index')->with('success','Has been updated');
    }

    public function destroy(ontime $Ontime)
    {
       $Ontime->delete();
       return redirect()->route('Payors.index')->with('success', 'Has been deleted!');

   }
}
