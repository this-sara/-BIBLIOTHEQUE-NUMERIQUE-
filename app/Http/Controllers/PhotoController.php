<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
    $photo=Photo::all();
    return view('photo.index',compact('photo'));
    }

    public function addphoto(Request $request)
    {
        $data= new Photo;
        $data->image=$request->image;
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('photo','public');
        }
        $data->save();
        return redirect()->back()->with('message','la photo a été ajouté avec succés.');
    }
    public function delete_photo($id){
        $data=Photo::find($id);
        $data->delete();
        return redirect()->back()->with('message','la photo a été supprimé avec succés.');
    }
}

