<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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
Route::get('/login', [usercontroller::class, 'login'])->middleware('login');
Route::get('/register', [usercontroller::class, 'register']);
Route::post('/reg-data', [usercontroller::class, 'regdata']);
Route::post('/validation', [usercontroller::class, 'validation']);
Route::get('/dashboard', [usercontroller::class, 'dashboard'])->middleware('check1');
Route::get('/logout', [usercontroller::class, 'logout']);
Route::get('/adlogin', [usercontroller::class, 'adlogin'])->middleware('admin');
Route::get('/adregister', [usercontroller::class, 'adregister']);
Route::post('/adreg-data', [usercontroller::class, 'adregdata']);
Route::post('/advalidation', [usercontroller::class, 'advalidation']);
Route::get('/admin', [usercontroller::class, 'admin'])->middleware('check2');
Route::get('/adlogout', [usercontroller::class, 'adlogout']);
Route::post('/store', [usercontroller::class, 'store'])->name('store');
Route::get('/fetchall', [usercontroller::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [usercontroller::class, 'delete'])->name('delete');
Route::get('/edit', [usercontroller::class, 'edit'])->name('edit');
Route::post('/update', [usercontroller::class, 'update'])->name('update');
Route::get('/shopping-cart', [usercontroller::class, 'shopcart'])->name('shopping.cart')->middleware('check1');
Route::get('/prod/{id}', [usercontroller::class, 'addproducttoCart'])->name('add.to.cart');
Route::patch('/update-shopping-cart', [usercontroller::class, 'updateCart'])->name('update.shopping.cart');
Route::delete('/delete-cart-product', [usercontroller::class, 'deleteProduct'])->name('delete.cart.product');
Route::get('/details/{id}', [usercontroller::class, 'detail'])->name('ndetails')->middleware('check1');
Route::get('/checkout', [usercontroller::class, 'checkout']);
Route::get('/confirm', [usercontroller::class, 'confirm']);

