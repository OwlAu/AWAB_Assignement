<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PurchaseController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//Book record(User)
Route::get('/books',[BookController::class,'display']);
Route::get('/books/{id}',[BookController::class,'displayInfo']);

//Place order(User)
Route::get('/purchases',[PurchaseController::class,'index']);
Route::post('/create_new_purchase',[PurchaseController::class,'store'])->name('/create_new_purchase');
Route::get('/update_purchase_info/{id}',[PurchaseController::class,'update']);
Route::get('/delete_purchase_info/{id}',[PurchaseController::class,'destroy']);

//Book record(Moderator)
Route::get('/book_record',[BookController::class,'index']);
Route::get('/update_book_record/{id}',[BookController::class,'show']);
Route::put('/update_book_record/{id}',[BookController::class,'update']);
Route::get('/delete_book_record/{id}',[BookController::class,'destroy']);

//Create new book record(Moderator)
Route::get('/create_new_book',function(){
    return view('createNewBookForm');
});
Route::post('/create_new_book',[BookController::class,'store'])->name('/create_new_book');

//Profile(User)
Route::get('/profile',[UserController::class,'index']);
Route::put('/update_user_profile/{id}',[UserController::class,'update']);
