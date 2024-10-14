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
route::get('/cust.dashboard',[KasMan::class,'kas'])->name('dashboard');
route::get('/cust.static',[KasMan::class,'static'])->name('static');
route::get('/cust.table',[KasMan::class,'table'])->middleware(['auth','custom'])->name('table');
route::get('/cust.chart',[KasMan::class,'chart'])->name('chart');
route::get('/admin.dashboard',[KasMan::class,'admin'])->name('dashboard');
route::post('/',[KasMan::class,'contact'])->name('contactpost');
route::post('/',[KasMan::class,'flogin'])->name('login.post');
Route::get('/cust.kas', [kasMan::class,'index'])->name('kas');
route::get('/admin.report',[KasMan::class,'report'])->name('report');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
