<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Project;
use App\Skill;
use App\Message;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\User;

class portiflioController extends Controller
{
    public function welcome(){
$user = User::FindOrFail(1);
$categories = Category::all();
$projects = Project::all();
$skills = Skill::all();
        return view('welcome',compact('categories','projects','user','skills'));
    }
    public function getImage($id){
        $project=Project::findOrFail($id);
        return Storage::get($project->image);
    }



    public function downloadcv(){

        $user = User::FindOrFail(1);
        return Storage::download($user->cv);
    }

    public function storecontact(Request $request){

       
        $request->validate([
            'name'=>'required|min:5|max:20',
            'email'=>'required|email',
            'subject'=>'required|min:5',
            'message'=>'required'


        ]);
      


        $message = new Message();
        $message->customer_name = $request->input('name');
        $message->subject = $request->input('subject');
       
        $message->email = $request->input('email');
        $message->content = $request->input('message');
        $message->save();
        return redirect('/');
    }


}
