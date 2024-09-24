<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EpruntController;
use App\Http\Controllers\GalleryContoller;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Photo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Category
route::get('/',[AdminController::class,'home'])->name('home');;
route::get('/home',[AdminController::class,'index'])->middleware(['auth','admin']);
// route::get('/index',[CategoryController::class,'index'])->name('index');
// route::get('/category',[CategoryController::class,'create'])->name('create');
// route::post('/category',[CategoryController::class,'store'])->name('store');
// route::delete('/{category}',[CategoryController::class,'destroy'])->name('destroy');
// // route::get('/{category}',[CategoryController::class,'edit'],'edit')->name('edit');
// route::put('/{category}',[CategoryController::class,'update'],'update')->name('.update');

route::resource('categories',CategoryController::class);

//book

route::resource('books',BookController::class);
route::resource('homes',HomeController::class);

//page

route::post('/add_emrunt/{id}',[EpruntController::class,'add_emrunt'])->name('add_emrunt');
route::get('/bookings',[EpruntController::class,'index'])->name('bookings')->middleware(['auth','admin']);
route::delete('/delete_booking/{id}',[EpruntController::class,'destroy'])->name('delete_booking')->middleware(['auth','admin']);
route::get('/approve_book/{id}',[EpruntController::class,'approve_book'])->name('approve_book')->middleware(['auth','admin']);
route::get('/waiting_book/{id}',[EpruntController::class,'waiting_book'])->name('waiting_book')->middleware(['auth','admin']);

route::get('/photo',[PhotoController::class,'index'])->name('photo');
Route::post('/addphoto',[PhotoController::class,'addphoto'])->name('addphoto');
Route::get('/delete_photo/{id}',[PhotoController::class,'delete_photo'])->name('delete_photo');         

route::post('/contact',[HomeController::class,'contact'])->name('contact');
route::get('/all_messages',[AdminController::class,'all_messages'])->name('all_messages')->middleware(['auth','admin']);
route::get('/send_mail/{id}',[AdminController::class,'send_mail'])->name('send_mail')->middleware(['auth','admin']);
route::post('/mail/{id}',[AdminController::class,'mail'])->name('mail')->middleware(['auth','admin']);

route::get('/about',[PageController::class,'about'])->name('about');
route::get('/galle',[PageController::class,'galle'])->name('galle');
route::get('/book',[PageController::class,'books'])->name('book');
route::get('/contact',[PageController::class,'contact'])->name('contact');



