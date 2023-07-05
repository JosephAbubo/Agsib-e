<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Client Route List
Route::middleware(['auth','user-access:0'])->group(function (){
    Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
//admin Route List
Route::middleware(['auth','user-access:1'])->group(function (){
    Route::get('/admin/home',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
});

//Super Admin Route List
Route::middleware(['auth','user-access:2'])->group(function (){
    Route::get('/superadmin/home',[App\Http\Controllers\HomeController::class, 'superAdminHome'])->name('superAdmin.home');
});
