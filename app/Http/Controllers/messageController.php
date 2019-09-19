<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactmail;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('id','desc')->get();
      
        return view('admin.messages.index',compact('messages'));
    }



    public function replay($id){

$message = Message::FindOrFail($id);
return view('admin.messages.replay',compact('message'));

    }

    public function sendreplay(Request $request , $message){

        $request->validate([
            'subject'=>'required|min:5|max:200',
            'content'=>'required|min:10|max:500',
            


        ]);
         $mess = Message::FindOrFail($message) ;  
        $subject = $request->input('subject');
        $content = $request->input('content');

        Mail::to($mess->email)->send(new contactmail($subject,$content));
        $mess->replayed = 1 ;
        $mess->save();
        return redirect('/messages')->with('sucsess','Message Replayed Sucsessfully');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Message::FindOrFail($id)->delete();
        return redirect('/messages')->with('sucsess','Message Deleted Sucsessfully');
    }

    public function read(){
        return "a7a";
                $messages = Message::where('replayed','=',0)->get();
        
                for($i =0 ; $i<$messages->count(); $i++){
        
                    $messages[$i]->replayed = 1 ;
                    $messages[$i]->save();
                }
                return redirect('/messages')->with('sucsess','All Messages Is Marked As Readed ');
 
           }


           public function deleteall(){
               return "a7a";
           }
}
