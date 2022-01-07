<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExpController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimController;
use App\Http\Controllers\ProtfolioController;
use App\Http\Controllers\ContactController;



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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class,'index']);
Route::get('/resume', [HomeController::class,'resume'])->name('user.resume');
Route::get('/protfolio', [HomeController::class,'protfolio'])->name('user.protfolio');
Route::get('/contact', [HomeController::class,'contact'])->name('user.contact');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

Route::group(['prefix'=>'admin','middleware' => 'auth'],function(){

 Route::get('/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
Route::get('/main/create', [MainPageController::class,'create'])->name('admin.main.create');
Route::post('/main/create', [MainPageController::class,'store'])->name('admin.main.store');

Route::get('/info/create', [InfoController::class,'create'])->name('admin.info.create');
Route::put('/info/create', [InfoController::class,'store'])->name('admin.info.store');
Route::get('/info/view', [InfoController::class,'view'])->name('admin.info.view');
Route::get('/info/edit/{id}', [InfoController::class,'edit'])->name('admin.info.edit');
Route::post('/info/update/{id}', [InfoController::class,'update'])->name('admin.info.update');
Route::get('/info/show/{id}', [InfoController::class,'show'])->name('admin.info.show');
Route::delete('/info/destroy/{id}', [InfoController::class,'destroy'])->name('admin.info.destroy');

Route::get('/education/create',[EducationController::class,'create'])->name('admin.edu.create');
Route::post('/education/create',[EducationController::class,'store'])->name('admin.edu.store');
Route::get('/education/view',[EducationController::class,'view'])->name('admin.edu.view');
Route::get('/education/edit/{id}',[EducationController::class,'edit'])->name('admin.edu.edit');
Route::post('/education/update/{id}',[EducationController::class,'update'])->name('admin.edu.update');
Route::delete('/education/destroy/{id}',[EducationController::class,'destroy'])->name('admin.edu.destroy');

Route::get('/exper/create',[ExpController::class,'create'])->name('admin.exper.create');
Route::post('/exper/create',[ExpController::class,'store'])->name('admin.exper.store');
Route::get('/exper/view',[ExpController::class,'view'])->name('admin.exper.view');
Route::get('/exper/edit/{id}',[ExpController::class,'edit'])->name('admin.exper.edit');
Route::post('/exper/update/{id}',[ExpController::class,'update'])->name('admin.exper.update');
Route::delete('/exper/destroy/{id}',[ExpController::class,'destroy'])->name('admin.exper.destroy');

Route::get('/service/create',[ServiceController::class,'create'])->name('admin.service.create');
Route::put('/service/create',[ServiceController::class,'store'])->name('admin.service.store');
Route::get('/service/view',[ServiceController::class,'view'])->name('admin.service.view');
Route::get('/service/edit/{id}',[ServiceController::class,'edit'])->name('admin.service.edit');
Route::post('/service/update/{id}',[ServiceController::class,'update'])->name('admin.service.update');
Route::delete('/service/destroy/{id}',[ServiceController::class,'destroy'])->name('admin.service.destroy');

Route::get('/testmoni/create',[TestimController::class,'create'])->name('admin.testmoni.create');
Route::put('/testmoni/create',[TestimController::class,'store'])->name('admin.testmoni.store');
Route::get('/testmoni/view',[TestimController::class,'view'])->name('admin.testmoni.view');
Route::get('/testmoni/edit/{id}',[TestimController::class,'edit'])->name('admin.testmoni.edit');
Route::post('/testmoni/update/{id}',[TestimController::class,'update'])->name('admin.testmoni.update');
Route::delete('/testmoni/destroy/{id}',[TestimController::class,'destroy'])->name('admin.testmoni.destroy');

Route::get('/protfolio/create',[ProtfolioController::class,'create'])->name('admin.protfolio.create');
Route::put('/protfolio/create',[ProtfolioController::class,'store'])->name('admin.protfolio.store');
Route::get('/protfolio/view',[ProtfolioController::class,'view'])->name('admin.protfolio.view');
Route::get('/protfolio/edit/{id}',[ProtfolioController::class,'edit'])->name('admin.protfolio.edit');
Route::post('/protfolio/update/{id}',[ProtfolioController::class,'update'])->name('admin.protfolio.update');
Route::delete('/protfolio/destroy/{id}',[ProtfolioController::class,'destroy'])->name('admin.protfolio.destroy');


});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');









/*Route::middleware(['auth:sanctum', 'verified'])->get('/u_dashboard', function () {
    return view('u_dashboard');
})->name('u_dashboard');*/
