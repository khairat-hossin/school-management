<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Student::get();

        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //Validation
        $request->validate([
            'name' => ['bail', 'required', 'max:150'],
            'roll' => ['bail', 'unique:students', 'required'],
            'dob' => ['required'],
        ]);

        Student::create([
            'name' => $request->name,
            'roll' => $request->roll,
            'dob' => $request->dob,
            'blood_group' => $request->blood_group,
        ]);

        return redirect()->route('student');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student= Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student= Student::find($id);
        //Validation
        $request->validate([
            'name' => ['bail', 'required', 'max:150'],
            'roll' => ['bail', 'required', Rule::unique('students')->ignore($student->id)],
            'dob' => ['required'],
        ]);

        $student->name = $request->name;
        $student->roll = $request->roll;
        $student->dob = $request->dob;
        $student->blood_group = $request->blood_group;
        $student->save();
        return redirect()->route('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Student::destroy($id);
       
       return redirect()->route('student');
    }

   
}
