<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Emprunt;
use App\Models\Livre;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\SendEmailNotification;

// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function index(){
        if(Auth::id()){
          $usertype=Auth()->user()->usertype;  
          if ($usertype=='user') {
            $books=Livre::all();
            $photos=Photo::all();
            return view('home.index',compact('books','photos'));
          }
          else if($usertype=='admin'){
            $livres=Livre::all()->count();
            $users=User::all()->count();
            $emprunts=Emprunt::all()->count();
            return view('admin.index',compact('livres','users','emprunts'));
          }
        }
        else {
            return redirect()->back();
        }
       }
       public function home(){
        $books=Livre::all();
        $photos=Photo::all();
        return view('home.index',compact('books','photos'));
      }
      public function all_messages(){
        $messages=Contact::all();
        return view('messages.index',compact('messages'));
      }
      public function send_mail($id){
        $data=Contact::find($id);
        return view('admin.send_mail',compact('data'));
      }
      public function mail(Request $request, $id){
        $data=Contact::find($id);
        $details=[
          'greeting'=> $request->greeting,
          'body'=> $request->body,
          'action_text'=>$request->action_text,
          'action_url'=>$request->action_url,
          'endline'=>$request->endline,
        ];
        Notification::send($data,new SendEmailNotification($details));
        // Mail::to($data->email)->send(new CustomMail($details));

        // return response()->json(['message' => 'Email sent successfully!']);
        
      }

    }