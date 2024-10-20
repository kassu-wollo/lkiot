<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KasMan;
use App\Http\Controllers\Crud;
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

//makerspace 
Route::get('/team', [kasMan::class,'team'])->name('team');
Route::post('/treg', [kasMan::class,'teamreg'])->name('treg');
Route::get('/admin.teamshow', [kasMan::class,'teamshow'])->name('teamshow');
Route::delete('/admin.teamshow/{email}', [KasMan::class, 'destroy'])->name('delete');

Route::get('/admin.preportshow', [kasMan::class,'pindex'])->name('preportshow');
route::get('/admin.report',[KasMan::class,'report'])->name('report');
route::post('/reg',[KasMan::class,'registerreport'])->name('reg');

route::get('/admin.mregister',[KasMan::class,'mregister'])->name('mregister');
route::post('/mreg',[KasMan::class,'makerspace'])->name('mreg');
Route::get('/admin.mview', [kasMan::class,'mindex'])->name('mview');
Route::post('/admin.mview/search', [Crud::class, 'mSearch'])->name('msearch');
Route::get('/admin.medit/{makerspace}', [Crud::class, 'mEdit'])->name('medit');
Route::delete('/admin.mdestroy/{makerspace}', [Crud::class, 'mDestroy'])->name('mdestroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
