<?php

use App\Http\Controllers\flowerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;



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


Route::get('login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('User');
    return redirect('/login');
})->name('logout');

//rout to regiater to th webpage
Route::view('/register', 'register');

// route to login page...
Route::post('/login',[Usercontroller::class,'login'])->name('login');

//route to register username and password....
Route::post('/register',[Usercontroller::class,'register'])->name('register');

Route::get('/',[flowerController::class,'showProduct'])->name('showProduct');
Route::get('/Admincp',[flowerController::class,'index'])->name('Admincp');
Route::get('/view-flower/{id}',[flowerController::class,'show']);
Route::get('/search/',[flowerController::class,'search'])->name('search');
Route::post('/add_to_cart',[flowerController::class,'AddCart'])->name('add_to_cart');
Route::get('/add_to_cartt/{id}',[flowerController::class,'AddCartt'])->name('add_to_cartt');
//route for add cart(0,1,2,3....n)
Route::get('cartItem',[flowerController::class,'cartItem'])->name('cartItem');
//rout for display cart
Route::get('cartlist',[flowerController::class,'cartList'])->name('cartlist');
// //route fro remove item from cart
Route::get('remove/{id}',[flowerController::class,'reoveCart']);
