<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Livre;
use App\Models\Photo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }
    public function galle()
    {
        $photos=Photo::all();
        return view('pages.gallery',compact('photos'));
    }
    public function books()
    {
        $books=Livre::all();
        return view('pages.books',compact('books'));
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
