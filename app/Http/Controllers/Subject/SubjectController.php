<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Validation\Rule;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::get();

        return view('subject/index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        //Validation
        $request->validate([
            'sub_code' => ['bail', 'required', 'unique:subjects', 'max:20'],
            'sub_name' => ['required'],
        ]);

        Subject::create([
            'sub_code' => $request->sub_code,
            'sub_name' => $request->sub_name,
        ]);

        return redirect()->route('sub.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::find($id);

        return view('subject/edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $subject = Subject::find($id);

        //validation
        $request->validate([
            'sub_code' => ['bail', 'required', 'max:20', Rule::unique('subjects')->ignore($subject->id)],
            'sub_name' => ['required'],
        ]);

        $subject->sub_code = $request->sub_code;
        $subject->sub_name = $request->sub_name;

        $subject->save();

        return redirect()->route('sub.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subject::destroy($id);

        return redirect()->route('sub.index');
    }
}
