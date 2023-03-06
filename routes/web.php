<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OldCarController;
use App\Http\Controllers\NewCarController;
//adham's controller
use App\Http\Controllers\PageControllor;
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

Route::get('/', [AdminController::class, 'home'])->name('admin.index');
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
 Route::post('/oldcar/add', [NewCarController::class, 'store'])->name('store.old');
 Route::get('/oldcar/edit/{id}', [NewCarController::class, 'Edit'])->name('admin.AddoldCar');
 Route::post('/oldcar/update/{id}', [NewCarController::class, 'Update'])->name('admin.AddoldCar');

//newcar route 
Route::get('/newcar/all', [NewCarController::class, 'new'])->name('admin.AddNewCar');
Route::post('/newcar/add', [NewCarController::class, 'store'])->name('store.new');
Route::get('/newcar/edit/{id}', [NewCarController::class, 'Edit']);
Route::post('/newcar/update/{id}', [NewCarController::class, 'Update']);













//adham's routes
// Route::get('/',[PageControllor::class,'home'] ) -> name('page.home');
// Route::get('/model/{brandNames}',[PageControllor::class,'model']  ) -> name('page.model');
// Route::get('/model2/{brandNames}',[PageControllor::class,'model2']  ) -> name('page.model2');
// Route::get('/Maintenance', [PageControllor::class,'Maintenance']) -> name('page.Maintenance');
// Route::get('/info tboa/{brandNames}', [PageControllor::class,'infotboa']) -> name('page.infotboa');
// Route::post('/info tboa/{brandNames}', [PageControllor::class,'insertTboaAds']) -> name('page.infotboa');
// Route::get('/info sparepart/{brandNames}', [PageControllor::class,'infosparepart']) -> name('page.infosparepart');
// Route::post('/info sparepart/{brandNames}', [PageControllor::class,'insertSparepartsAds']) -> name('page.infosparepart');
// Route::get('/info rent/{modelNames}', [PageControllor::class,'inforent']) -> name('page.inforent');
// Route::post('/info rent/{modelNames}', [PageControllor::class,'insertRentAds']) -> name('page.inforent');
// Route::get('/info oil',[PageControllor::class,'infooil'] ) -> name('page.infooil');
// Route::get('/info maintenance',[PageControllor::class,'infomaintenance'] ) -> name('page.infomaintenance');
// Route::get('/info car/{modelNames}', [PageControllor::class,'infocar']) -> name('page.infocar');
// Route::post('/info car/{modelNames}', [PageControllor::class,'sellCarAds']) -> name('page.infocar');
// Route::get('/detail ads/{username}', [PageControllor::class,'detailads']) -> name('page.detailads');
// Route::get('/category sell', [PageControllor::class,'categorysell']) -> name('page.categorysell');
// Route::get('/brand', [PageControllor::class,'brand']) -> name('page.brand');
// Route::get('/brand2', [PageControllor::class,'brand2']) -> name('page.brand2');
// Route::get('/brand3', [PageControllor::class,'brand3']) -> name('page.brand3');
// Route::get('/brand4', [PageControllor::class,'brand4']) -> name('page.brand4');
// Route::get('/ads', [PageControllor::class,'ads']) -> name('page.ads');
// Route::get('/info user car', [PageControllor::class,'infousercar']) -> name('page.infoCarMaintenance');
// Route::get('/changed details', [PageControllor::class,'changeddetails']) -> name('page.ichanged');
// Route::get('/ads view', [PageControllor::class,'adsviews']) -> name('page.viewer');
// Route::get('/new cars ads', [PageControllor::class,'newcarads']) -> name('page.newcarads');
// Route::get('/used cars ads', [PageControllor::class,'usedcarads']) -> name('page.usedcarads');
// Route::get('/spareparts ads', [PageControllor::class,'sparepartads']) -> name('page.sparepartads');
// Route::get('/tboa ads', [PageControllor::class,'tboaads']) -> name('page.tboaads');
// Route::get('/rent cars ads', [PageControllor::class,'rentcarads']) -> name('page.rentcarads');
