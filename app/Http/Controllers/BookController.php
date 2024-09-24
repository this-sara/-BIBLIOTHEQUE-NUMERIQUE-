<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Livre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres=Livre::all();
        return view('book.index',compact('livres')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('book.create',compact('categories'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data=new Livre;
        $data->titre=$request->titre;
        $data->image=$request->image;
        $data->auteur=$request->auteur;
        $data->description=$request->description;
        $data->editeur=$request->editeur;
        $data->date_edition=$request->date_edition;
        $data->nbre_exemplaires=$request->nbre_exemplaires;
        $data->categorie_id=$request->categorie_id;
        //VALIDATION
        // $data=$request->validate([
        //     'titre'=>'required',
        //     'auteur'=>'required',
        //     'image'=>'required',
        //     'description'=>'required',
        //     'editeur'=>'required',
        //     'date_edition'=>'required',
        //     'nbre_exemplaires'=>'required',
        //     'categorie_id'=>'required',
        //     ]);
        // Livre::create($data);
        if($request->hasFile('image')){
            $data['image'] =$request->file('image')->store('livre','public');
        }
        $data->save();
        return redirect()->route('books.create')->with('message','Le livre a été ajouté avec succés.');
       }  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre){
        // $profile=($id); Route model binding 
        // $id=(int)$request->id;
        // $profile=profile::findOrFail($id);
        // if($profile===null){
        //     return abort(404);
        // }
        return view('book.show',compact('livre'));
       } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Livre::find($id);
        $category =Category::all();
        return view('book.edit',compact('data','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $data =Livre::find($id);
        $data->titre=$request->titre;
        // $data->image=$request->image;
        $data->auteur=$request->auteur;
        $data->description=$request->description;
        $data->editeur=$request->editeur;
        $data->date_edition=$request->date_edition;
        $data->nbre_exemplaires=$request->nbre_exemplaires;
        $data->categorie_id=$request->categorie_id;
        $book_image=$request->image;
        if($book_image)
        {
            $book_image_name=time().'.'.$book_image->getClientOriginalExtension();
            $request->book_img->move('livre',$book_image_name);
            $data->book_img = $book_image_name;
        }
        // if($request->hasFile('image')){
        //     $data['image'] =$request->file('image')->store('livre','public');
        // }else{
        //     $data['image'] =$request->image;
        // }
        
        $data->save();
        return redirect()->route('books.index')->with('message','Le livre a été modifié avec succés.');
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Livre::find($id);
        $data->delete();
        return to_route('books.index')->with('message','Le livre a été supprimé avec succés.');
    }
}
