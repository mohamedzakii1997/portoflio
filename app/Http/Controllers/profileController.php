<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = User::FindOrFail($id);
       return view('admin\profiles\edit',compact('user'));
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
            'name'=>'required|min:5|max:20',
            'email'=>'required|min:10|max:50',
            'cv'=>'nullable',
            'job'=>'required',
            'job_major'=>'required',
            'country'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'age'=>'required',
            


        ]);

        $user = User::FindOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->job = $request->input('job');
        $user->job_major = $request->input('job_major');
        $user->country = $request->input('country');
        $user->city = $request->input('city');
        $user->phone = $request->input('phone');
        $user->age = $request->input('age');


        if($request->hasFile('cv')){
            Storage::delete($user->cv);
            $user->cv = $request->file('cv')->store('cv');
        }
       
        $user->save();
        return back()->with('sucsess','Profile Edited Sucsessfully');

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
    }
}
