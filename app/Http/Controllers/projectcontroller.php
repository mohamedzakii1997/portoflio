<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Category;
use Illuminate\Support\Facades\Storage;
class projectcontroller extends Controller
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
        $projects = Project::all();
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin\projects\create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getImage($id){
        $product=Project::findOrFail($id);
        return Storage::get($product->image);
    }
    public function store(Request $request)
    {
        //return $request->file('image');
        $request->validate([
            'name'=>'required|min:5|max:20',
            'desc'=>'required|min:10|max:200',
            'image'=>'required|image',
            'radios'=>'required'


        ]);
      


        $project = new Project();
        $project->name = $request->input('name');
        $project->description = $request->input('desc');
        if($request->hasFile('image')){
            $project->image = $request->file('image')->store('images\projects');
        }
        $project->category_id = $request->input('radios');
        $project->save();
        return redirect('/projects')->with('sucsess','Project Added Sucsessfully');

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
        $project = Project::findOrFail($id);
        $categories = Category::all();
        return view('admin\projects\edit',compact('project','categories'));
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
            'desc'=>'required|min:10|max:50',
            'image'=>'nullable|image',
            'radios'=>'required'


        ]);

        $project = Project::FindOrFail($id);
        $project->name = $request->input('name');
        $project->description = $request->input('desc');
        if($request->hasFile('image')){
            Storage::delete($project->image);
            $project->image = $request->file('image')->store('images\projects');
        }
        $project->category_id = $request->input('radios');
        $project->save();
        return redirect('/projects')->with('sucsess','Project Edited Sucsessfully');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::findOrFail($id);
        Storage::delete($project->image);
        $project->delete();
        return redirect('/projects')->with('sucsess','project Deleted');
    }
}
