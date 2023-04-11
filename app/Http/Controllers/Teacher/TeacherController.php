<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        //dd($teachers);
        //
        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //Validation
        $request->validate([
            'name' => ['bail', 'required', 'max:200'],
            'reg_num' => ['bail', 'required', 'unique:teachers'],
            'subject' => ['required'],
            'dob' => ['required'],
            'blood_group' => ['required'],
        ]);

        Teacher::create([
            'name' => $request->name,
            'reg_num' => $request->reg_num,
            'subject' => $request->subject,
            'dob' => $request->dob,
            'blood_group' => $request->blood_group,
        ]);

        return redirect()->route('teacher');
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
        //
        $teacher = Teacher::find($id);
        return view('teacher.edit', compact('teacher'));
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
        $teacher = Teacher::find($id);
        //Validation
        $request->validate([
            'name' => ['bail', 'required', 'max:200'],
            'reg_num' => ['bail', 'required', Rule::unique('teachers')->ignore($teacher->id)],
            'subject' => ['required'],
            'dob' => ['required'],
            'blood_group' => ['required'],
        ]);

        $teacher->name = $request->name;
        $teacher->reg_num = $request->reg_num;
        $teacher->subject = $request->subject;
        $teacher->dob = $request->dob;
        $teacher->blood_group = $request->blood_group;
        $teacher->save();

        return redirect()->route('teacher');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('teacher');
    }
}
