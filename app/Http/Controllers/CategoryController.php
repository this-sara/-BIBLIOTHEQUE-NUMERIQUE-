<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('category.index',compact('categories'));  
    }

    public function create(){
        return view('category.create');
    }
    
    public function store(Request $request){
        $titre=$request->titre;
        

        //VALIDATION

        $formFields=$request->validate([
            'titre'=>'required',
        ]);
        Category::create($formFields);
        return redirect()->route('categories.create')->with('message','la categorie a été ajouté avec succés.');
       }  

       public function destroy(Category $category){
        $category->delete();
        return to_route('categories.index')->with('message','la categorie a été supprimé avec succés.');
     }

    //  public function edit(Category $category){
    //     return view('category.edit',compact('category'));
    //   }
    //  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //   public function update(Request $request){
    //     $formFields=$request->validate([
    //         'titre'=>'required',
    //     ]);
        
    //     $category->fill($formFields)->save();
    //     return redirect()->route('categorys.show',$category->id)->with('success','votre category a bien ete modifier'."  ".$profile->name);
    //   }
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
    
}
