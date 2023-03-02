<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OldCarController;
use App\Http\Controllers\NewCarController;

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

// Route::get('/', function () {
//     return view('welcome');


// });
//  Admin page controller 

Route::get('/adminbashbord', [AdminController::class, 'home'])->name('admin.index');
Route::get('/UserProfile', [AdminController::class, 'UserProfile'])->name('admin.UserProfile');

 //brand controller
 Route::get('/AddBrandPhoto', [BrandController::class, 'ab'])->name('admin.AddBrandPhoto');
 Route::post('/AddBrandPhoto/add', [BrandController::class, 'store'])->name('store.brand');

 //accout controller
 Route::get('/accounts', [AccountController::class, 'acc'])->name('admin.accounts');
 //Route::get('/accounts', [AccountController::class, 'acc'])->name('admin.accounts');
 //Route::get('/accounts', [AccountController::class, 'acc'])->name('admin.accounts');

 //ads route
 Route::get('/ads', [AdsController::class, 'ads'])->name('admin.ads');

 //report route
 Route::get('/report', [ReportController::class, 'rep'])->name('admin.reports');

 // oldcar route
 Route::get('/oldcar', [OldCarController::class, 'old'])->name('admin.AddOldCar');

//newcar route 
Route::get('/newcar', [NewCarController::class, 'new'])->name('admin.AddNewCar');
