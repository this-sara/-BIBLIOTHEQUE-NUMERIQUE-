<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class EpruntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Emprunt::all();
       return view('emprunt.index',compact('bookings'));
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
    public function add_emrunt(Request $request,$id)
    {
        $request->validate([
           'date_sortie'=>'Required|date',
           'date_retour'=>'date|after:date_sortie',

        ]);
       $data=new Emprunt;
       $data->livre_id=$id;
       $data->name=$request->name;
       $data->email=$request->email;
       $data->phone=$request->phone;

       $sortie=$request->date_sortie;
       $retour=$request->date_retour;
       $isbooked=Emprunt::where('livre_id',$id)
       ->where('date_sortie','<=',$retour)
       ->where('date_retour','>=',$sortie)->exists();
       if($isbooked){
        return redirect()->back()->with('message','book is already reserved please try different date');
       }
       else{
           $data->date_sortie=$request->date_sortie;
            $data->date_retour=$request->date_retour;
            $data->save();

       return redirect()->back()->with('message','book reserved Successfully');
       }

    
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
        $data=Emprunt::find($id);
        $data->delete();
        return to_route('bookings')->with('message','la reservation a bien été supprimer');
    }
    public function approve_book($id){
        $bookings=Emprunt::find($id);
        $bookings->status="approved";
        $bookings->save();
        return redirect()->back();
    }
    public function waiting_book($id){
        $bookings=Emprunt::find($id);
        $bookings->status="waiting";
        $bookings->save();
        return redirect()->back();
    }
}
