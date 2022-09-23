<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//=====================Home Controller ==============//
Route::get('/',[HomeController::class,'index']);

Route::get('/redirects',[HomeController::class,'redirects']);


        //   ===============Admin Controller============ //
Route::get('/users',[AdminController::class,'users']);

Route::get('/delete_users/{id}',[AdminController::class,'delete_users']);

Route::get('/foodmenu',[AdminController::class,'foodmenu']);

Route::post('/addfoodmenu',[AdminController::class,'addfoodmenu']);

Route::get('/show_food_menu',[AdminController::class,'show_food_menu']);

Route::get('/add_chefs',[AdminController::class,'add_chefs']);

Route::post('/addchefs',[AdminController::class,'addchefs']);

Route::get('/show_all_chefs',[AdminController::class,'show_all_chefs']);

Route::get('/delete_food_menu/{id}',[AdminController::class,'delete_food_menu']);

Route::get('/delete_chef/{id}',[AdminController::class,'delete_chef']);

Route::get('/edit_chef/{id}',[AdminController::class,'edit_chef']);

Route::post('/save_edit_chefs/{id}',[AdminController::class,'save_edit_chefs']);

Route::get('/edit_food_menu/{id}',[AdminController::class,'edit_food_menu']);

Route::post('/save_edit_food/{id}',[AdminController::class,'save_edit_food']);

Route::post('/reservation',[AdminController::class,'reservation']);

Route::get('/show_reservations',[AdminController::class,'show_reservations']);

Route::post('/search_food',[AdminController::class,'search_food']);

Route::get('/add_breakfast',[AdminController::class,'add_breakfast']);
Route::get('/add_lunch',[AdminController::class,'add_lunch']);
Route::get('/add_dinner',[AdminController::class,'add_dinner']);

Route::post('/add_breakfast_save',[AdminController::class,'add_breakfast_save']);
Route::post('/add_lunch_save',[AdminController::class,'add_lunch_save']);
Route::post('/add_dinner_save',[AdminController::class,'add_dinner_save']);

Route::get('show_breakfast',[AdminController::class,'show_breakfast']);
Route::get('show_lunch',[AdminController::class,'show_lunch']);
Route::get('show_dinner',[AdminController::class,'show_dinner']);

Route::get('/edit_breakfast/{id}',[AdminController::class,'edit_breakfast']);
Route::get('/edit_lunch/{id}',[AdminController::class,'edit_lunch']);
Route::get('/edit_dinner/{id}',[AdminController::class,'edit_dinner']);


Route::post('/save_edit_breakfast/{id}',[AdminController::class,'save_edit_breakfast']);
Route::post('/save_edit_lunch/{id}',[AdminController::class,'save_edit_lunch']);
Route::post('/save_edit_dinner/{id}',[AdminController::class,'save_edit_dinner']);


Route::get('/delete_breakfast_menu/{id}',[AdminController::class,'delete_breakfast_menu']);
Route::get('/delete_lunch_menu/{id}',[AdminController::class,'delete_lunch_menu']);
Route::get('/delete_dinner_menu/{id}',[AdminController::class,'delete_dinner_menu']);