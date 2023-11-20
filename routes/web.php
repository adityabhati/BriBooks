<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('home');


Route::get('/login',function(){
    return view('login');
})->name('login');

Route::get('/register',function(){
    return view('register');
})->name('register');

Route::post('/userRegister',[UserController::class,'userRegister'])->name('userRegister');
Route::post('/userLogin',[UserController::class,'login'])->name('userLogin');
Route::get("/logout",[UserController::class,"logout"])->name("logout");

Route::get('/createBook',function(){
    return view('createBook');
})->name('createBook');
Route::get('/frontCover',function(){
    return view('frontCover');
})->name('frontCover');
Route::get('/backCover',function(){
    return view('backCover');
})->name('backCover');
Route::get('/story',function(){
    return view('story');
})->name('story');


Route::post('/saveBook',[BookController::class,'saveBook'])->name('saveBook');
Route::get('/allBooks',[BookController::class,'allBooks'])->name('allBooks');

Route::get('/editBook/{id}',[BookController::class,'editBook'])->name('editBook');
Route::post('/updateBook/{id}',[BookController::class,'updateBook'])->name('updateBook');

Route::get('/generatePDF/{id}',[BookController::class,'generatePDF'])->name('generatePDF');
// Route::get('/uploadFrontCover',[BookController::class,'frontcover'])->name("frontCover");
