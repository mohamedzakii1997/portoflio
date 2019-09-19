<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class skillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $skills = Skill::all();
        return view('admin.skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\skills\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:2|max:20',
            'progress'=>'required',
            

        ]);
      

        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->progress = $request->input('progress');
        $skill->save();
        return redirect('/skills')->with('sucsess','skill Added Sucsessfully');
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
        $skill = Skill::findOrFail($id);
       
        return view('admin\skills\edit',compact('skill'));
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
        $request->validate([
            'name'=>'required|min:2|max:20',
            'progress'=>'required',
            

        ]);
      

        $skill = Skill::FindOrFail($id);
        $skill->name = $request->input('name');
        $skill->progress = $request->input('progress');
        $skill->save();
        return redirect('/skills')->with('sucsess','skill Edited Sucsessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::FindOrFail($id);
        $skill->delete();
        return redirect('/skills')->with('sucsess','skill Deleted Sucsessfully');
    }
}
