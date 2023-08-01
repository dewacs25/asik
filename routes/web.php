<?php

use App\Http\Controllers\DataMasterController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [FrontEndController::class,'index']);
Route::get('/pengajuan/register', [FrontEndController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['admin.auth']);


Route::get('/master/users',[DataMasterController::class,'users'])->middleware(['admin.auth','SuperAdmin.role']);
Route::post('/master/users',[DataMasterController::class,'AddUser'])->name('AddUser')->middleware(['admin.auth','SuperAdmin.role']);
Route::delete('/master/users/{id}',[DataMasterController::class,'DeleteUser'])->name('DeleteUser')->middleware(['admin.auth','SuperAdmin.role']);
Route::put('/master/users/{id}',[DataMasterController::class,'UpdateUser'])->name('UpdateUser')->middleware(['admin.auth','SuperAdmin.role']);


Route::get('auth/login',[LoginController::class,'login'])->name('login');
Route::post('auth/login',[LoginController::class,'login_action'])->name('login.action');
Route::get('auth/logout',[LoginController::class,'logout'])->name('logout');
