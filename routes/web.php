<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('user.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return redirect('/');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

// Route buat assign permission ke Role
Route::post('/role/{id}/assign_permissions',[RoleController::class,'assign_permissions'])->name('role.assign_permissions');

Route::resource('role',RoleController::class)->except('edit');
Route::resource('permission',PermissionController::class)->except('edit');

Route::resource('user',UserController::class)->only('index','show','update','destroy');

Route::view('tes1','pages.tes.tes1');
Route::get('/tes2',[TesController::class,'show_user']);
Route::get('/tes3',[TesController::class,'delete_user'])->can('delete users');
