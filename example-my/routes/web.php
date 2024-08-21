<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KasMan;
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
Route::get('/', function () {  return view('home');});
route::get('/cust.kas',[KasMan::class,'kas'])->name('kas');
route::get('/cust.register',[KasMan::class,'register'])->name('register');
route::get('/cust.table',[KasMan::class,'table'])->name('table');
route::get('/cust.chart',[KasMan::class,'chart'])->name('chart');

route::post('/',[KasMan::class,'contact'])->name('contact');
route::post('/',[KasMan::class,'flogin'])->name('login.post');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
