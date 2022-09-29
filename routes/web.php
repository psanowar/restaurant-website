<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/redirects',[HomeController::class,'redirects']);

Route::post('/addcart/{id}',[HomeController::class,'addcart']);

Route::get('/showcart/{id}',[HomeController::class,'showcart']);


Route::get('/removefood/{id}',[HomeController::class,'removefood']);

Route::post('/orderconfirm',[HomeController::class,'orderconfirm']);





Route::get('/users',[AdminController::class,'users']);

Route::get('/userdelete/{id}',[AdminController::class,'userdelete']);

Route::get('/foodmenu',[AdminController::class,'foodmenu']);

Route::post('/addfood',[AdminController::class,'addfood']);

Route::get('/deletefood/{id}',[AdminController::class,'deletefood']);

Route::get('/updatefood/{id}',[AdminController::class,'updatefood']);

Route::post('/update/{id}',[AdminController::class,'update']);



Route::post('/reservation',[AdminController::class,'reservation']);

Route::get('/showreservation',[AdminController::class,'showreservation']);

Route::get('/foodchef',[AdminController::class,'foodchef']);

Route::post('/addchef',[AdminController::class,'addchef']);

Route::get('/deletechef/{id}',[AdminController::class,'deletechef']);

Route::get('/chefupdate/{id}',[AdminController::class,'chefupdate']);

Route::post('/updatechef/{id}',[AdminController::class,'updatechef']);

Route::get('/order',[AdminController::class,'order']);









Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
