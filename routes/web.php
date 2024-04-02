<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\SupplierController;
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
    return view('welcome');
});



Route::get('/admin', [PagesController::class, 'index'])->name('admin.index');

Route::get('/accounts', [PagesController::class, 'accounts'])->name('admin.accounts');


Route::get('/inventory', [PagesController::class, 'inventory'])->name('admin.inventory');


Route::get('/userindex', [PagesController::class, 'userindex'])->name('users.userindex');


Route::get('/menu', [PagesController::class, 'menu'])->name('users.menu');


Route::get('/about', [PagesController::class, 'about'])->name('users.about');


Route::get('/account', [PagesController::class, 'account'])->name('users.account');

Route::get('/modal', [PagesController::class, 'modal'])->name('users.modal');

Route::get('/login', [PagesController::class, 'login'])->name('registrations.login');


Route::get('/payment', [PagesController::class, 'payment'])->name('users.checkout');



Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/{id}/restore', [ProductController::class, 'restore'])->name('product.restore');
Route::delete('/product/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::delete('/product/{id}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/suppliers', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/suppliers', [SupplierController::class, 'store'])->name('supplier.store');
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
Route::post('/suppliers/{id}', [SupplierController::class, 'update'])->name('supplier.update');
Route::get('/suppliers/{id}/restore', [SupplierController::class, 'restore'])->name('supplier.restore');
Route::delete('/suppliers/{id}', [SupplierController::class, 'delete'])->name('supplier.delete');
Route::delete('/suppliers/{id}/destroy', [SupplierController::class, 'destroy'])->name('supplier.destroy');
