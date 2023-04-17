<?php

namespace App\Http\Controllers\BloodGroup;

use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BloodGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blood_groups = BloodGroup::all();
        return view('bloodgroup.index', compact('blood_groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bloodgroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'blood_group' => ['required', 'unique:blood_groups']
        ]);

        BloodGroup::create([
            'blood_group' => $request->blood_group,
        ]);
        return redirect()->route('bloodgroup');
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
        $blood_group = BloodGroup::find($id);
        return view('bloodgroup.edit', compact('blood_group'));
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
        //
        $blood_group = BloodGroup::find($id);

        $request->validate([
            'blood_group' => ['required', Rule::unique('blood_groups')->ignore($blood_group->id)],
        ]);

        $blood_group->blood_group = $request->blood_group;
        $blood_group->save();
        
        return redirect()->route('bloodgroup');
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
        $blood_group = BloodGroup::find($id);
        $blood_group->delete();

        return redirect()->route('bloodgroup');
    }
}
