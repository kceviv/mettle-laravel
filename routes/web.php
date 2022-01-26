<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterInterestController;
use App\Http\Controllers\Auth\RegisterController;

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
// Route::post('/store', 'RegisterInterestController@store')->name('register.interest');

Auth::routes();
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/superadmin', [HomeController::class, 'superadminHome'])->name('superadmin')->middleware('superadmin');

Route::get('/admin/admins',[AdminController::class, 'index'])->name('admin.admin')->middleware('is_admin')->middleware('superadmin');
Route::get('/admin/create',[AdminController::class, 'create'])->name('admin.create')->middleware('is_admin')->middleware('superadmin');
Route::post('/admin/store',[AdminController::class, 'store'])->name('admin.store')->middleware('is_admin')->middleware('superadmin');


Route::get('/admin/registerinterest',[RegisterInterestController::class, 'show'])->name('admin.register')->middleware('is_admin');