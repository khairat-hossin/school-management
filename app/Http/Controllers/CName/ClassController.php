<?php

namespace App\Http\Controllers\CName;

use App\Http\Controllers\Controller;
use App\Models\classes;
use App\Models\Classes as ModelsClasses;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClassController extends Controller
{
    //
    public function index()
    {
        $classes= classes::get();

        return view('class.index', compact('classes'));
    }

    public function create()
    {
        return view('class.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        //Validation
        $request->validate([
            'name' => ['bail', 'required', 'unique:classes', 'max:200'],
        ]);

        Classes::create([
            'name' => $request->name,
        ]);

        return redirect()->route('class');

    }

    public function edit($id)
    {
        $class= Classes::find($id);
        return view('class.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $class= Classes::find($id);
        //Validation
        $request->validate([
            'name' => ['bail', 'required', 'max:200', Rule::unique('classes')->ignore($class->id)],
        ]);

        $class->name = $request->name;
        $class->save();
        return redirect()->route('class');
    }

    public function destroy($id)
    {
       Classes::destroy($id);
       
       return redirect()->route('class');
    }




}
