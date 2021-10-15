<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Nette\Schema\Expect;

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
    return view('index');
})->name('home');
Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index')->middleware('App\Http\Middleware\checklogin');

route::resource('admin/activity' , App\Http\Controllers\admin\ActivityController::class)->middleware('App\Http\Middleware\checklogin');
route::get('admin/activity/delete/{id}' , 'App\Http\Controllers\admin\ActivityController@destroy');
route::resource('admin/partner' , App\Http\Controllers\admin\PartnerController::class)->middleware('App\Http\Middleware\checklogin');
route::resource('admin/about' , App\Http\Controllers\admin\AboutController::class)->middleware('App\Http\Middleware\checklogin');
route::resource('admin/report' , App\Http\Controllers\admin\ReportController::class)->middleware('App\Http\Middleware\checklogin');
route::resource('admin/staff' , App\Http\Controllers\admin\StaffController::class)->middleware('App\Http\Middleware\checklogin');
route::resource('admin/plane' , App\Http\Controllers\admin\PlanController::class)->middleware('App\Http\Middleware\checklogin');
// route::resource('admin/users' , App\Http\Controllers\admin\UserController::class);
route::resource('/' , App\Http\Controllers\HomeController::class);
route::get('file/{id}' , 'App\Http\Controllers\FileController@download')->name('file');
route::get('/contact_us' , 'App\Http\Controllers\visitorController@contact_us')->name('contact');
route::get('/report' , 'App\Http\Controllers\visitorController@report')->name('report');
route::get('/about_us' , 'App\Http\Controllers\visitorController@about')->name('about');
route::get('/staff' , 'App\Http\Controllers\visitorController@staff')->name('staff');
route::get('/plane' , 'App\Http\Controllers\visitorController@plane')->name('plane');
route::get('/activity/{id}' , 'App\Http\Controllers\visitorController@active')->name('active');
// route::get('/' , 'App\Http\Controllers\HomeController@index');


route::resource('contact' , App\Http\Controllers\ContactController::class);
Auth::routes(['register'=>false]);
Route::resource('/admin/user', App\Http\Controllers\admin\UserController::class)->middleware('App\Http\Middleware\checkAdmin');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
