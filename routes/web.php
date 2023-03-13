<?php

use Illuminate\Support\Facades\Route;


/// lebih rapi dari sebelum nya admin nya di buat folder
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminAbout;
use App\Http\Controllers\admin\AdminAuth;
use App\Http\Controllers\admin\AdminBanner;
use App\Http\Controllers\admin\AdminDasboard;
use App\Http\Controllers\admin\AdminInformasi;
use App\Http\Controllers\admin\AdminPesan;
use App\Http\Controllers\admin\AdminFoto;



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

// Route::get('/', [Home::class, 'index']);
// Route::get('/detail/{id}', [Home::class, 'detail']);
// Route::get('/informasi/{id}', [Home::class, 'informasi']);
// Route::get('/foto', [HomeFoto::class, 'index']);
// Route::get('/show/{id}', [HomeFoto::class,'detail']);




// Route::get('/about', function () {
//     $data = [
//         'content'=> 'home/about/index'
//     ];
//     return view('home.layouts.wrapper',$data);
// });



Route::get('/login', [AdminAuth::class, 'index'])->name('login');
Route::post('/login/do', [AdminAuth::class, 'doLogin']);

Route::get('/logout', [AdminAuth::class, 'logout']);




// Admin
Route::prefix('/admin')->group(function (){
        Route::get('/dasboard', [AdminDasboard::class, 'index']);
    Route::resource('/about', AdminAbout::class);
    Route::resource('/pesan', AdminPesan::class);
    Route::resource('/banner', AdminBanner::class);
    Route::resource('/informasi', AdminInformasi::class);
    Route::resource('/foto', AdminFoto::class);

});