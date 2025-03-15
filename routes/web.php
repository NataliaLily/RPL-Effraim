<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriController;
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
Route::get('dashboard',[\App\Http\Controllers\DashboardController::class,'index']);
Route::post('biodata',[\App\Http\Controllers\DashboardController::class,'simpan'])->name('biodata.simpan');

//Login
Route::get('/login',[\App\Http\Controllers\AuthController::class,'index'])->name('auth.login');
Route::post('/login',[\App\Http\Controllers\AuthController::class,'verify'])->name('auth.verify');
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'index'])->name('auth.index');



Route::group(['middleware' => ['auth:user']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/',[\App\Http\Controllers\DashboardController::class, 'index'])->name('admin.index');
        //category
        /*Categories*/
        Route::get('/categori',[CategoriController::class, 'index'])->name('category.index');
        Route::get('/categori/add',[CategoriController::class, 'add'])->name('category.add');
        Route::post('/categori/store',[CategoriController::class, 'store'])->name('category.store');
        Route::get('/categori/edit {id}',[CategoriController::class, 'edit'])->name('category.edit');
        Route::post('/categori/update',[CategoriController::class, 'update'])->name('category.update');
        Route::get('/categori/delete{id}',[CategoriController::class, 'delete'])->name('category.delete');

    });
});
