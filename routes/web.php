<?php


use Illuminate\Support\Facades\Route;




use App\Http\Controllers\ListController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahnewsController;
use App\Http\Controllers\TambahpesertaController;
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
})->middleware('auth');



Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/registerproses', [RegisterController::class,'store'])->name('registerproses');


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/loginproses', [LoginController::class,'store'])->name('loginproses');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');


Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::post('/contactproses', [ContactController::class,'store'])->name('contactproses');


Route::get('/tambahpeserta', [TambahpesertaController::class,'index'])->name('tambahpeserta');
Route::post('/tambahpesertaproses', [TambahpesertaController::class,'store'])->name('tambahpesertaproses');

Route::get('/list', [ListController::class,'index'])->name('list')->middleware('auth');

Route::get('/tampilkandata/{id}', [ListController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/editdata/{id}', [ListController::class,'editdata'])->name('editdata');

Route::get('/hapusdata/{id}', [ListController::class,'hapusdata'])->name('hapusdata');

Route::get('/exportpdf', [ListController::class,'exportpdf'])->name('exportpdf');

Route::get('/news', [NewsController::class,'index'])->name('news');

Route::get('/tambahnews', [TambahnewsController::class,'index'])->name('tambahnews');
Route::post('/tambahnewsproses', [TambahnewsController::class,'store'])->name('tambahnewsproses');

Route::get('/tampilkannews/{id}', [NewsController::class,'tampilkannews'])->name('tampilkannews');


