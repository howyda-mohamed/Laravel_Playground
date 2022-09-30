<?php

use App\Http\Controllers\Admin\CenterController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PlaygroundController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Owner\StaffController as OwnerStaffController;
use App\Http\Controllers\Owner\PlaygroundController as OwnerPlaygroundController;
use App\Http\Controllers\Owner\ReserationController;
use App\Http\Controllers\Owner\ReservationController as OwnerReservationController;
use App\Http\Controllers\user\ContactController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ReservationController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

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
define('PAGINATION_COUNT','10');
Route::group(['prefix'=>'/'],function(){
    Route::get('/',[HomeController::class,'index'])->name('site');
    Route::get('/redirects',[ControllersHomeController::class,'redirects'])->name('redirects');
    Route::get('/center',[HomeController::class,'centers'])->name('centers');
    Route::get('/playground',[HomeController::class,'playgrounds'])->name('playgrounds');
    Route::get('/contactUs',[ContactController::class,'index'])->name('contact');
    Route::post('/Storecontact',[ContactController::class,'store'])->name('store.contact');
    Route::get('/reservation/{id}',[ReservationController::class,'index'])->name('reservation.show');
    Route::post('/reservationStore/{id}',[ReservationController::class,'store'])->name('reservation.store');
});

Route::group(['prefix'=>'admin','middleware'=>'role:admin'],function()
{
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::group(['prefix'=>'center'],function()
    {
        Route::get('/',[CenterController::class,'index'])->name('admin.center');
        Route::get('/create',[CenterController::class,'create'])->name('admin.center.create');
        Route::post('/store',[CenterController::class,'store'])->name('admin.center.store');
        Route::get('/edit/{id}',[CenterController::class,'edit'])->name('admin.center.edit');
        Route::post('/update/{id}',[CenterController::class,'update'])->name('admin.center.update');
        Route::get('/delete/{id}',[CenterController::class,'delete'])->name('admin.center.delete');
    });
    Route::group(['prefix'=>'services'],function()
    {
        Route::get('/',[ServiceController::class,'index'])->name('admin.service');
        Route::get('/create',[ServiceController::class,'create'])->name('admin.service.create');
        Route::post('/store',[ServiceController::class,'store'])->name('admin.service.store');
        Route::get('/edit/{id}',[ServiceController::class,'edit'])->name('admin.service.edit');
        Route::post('/update/{id}',[ServiceController::class,'update'])->name('admin.service.update');
        Route::get('/delete/{id}',[ServiceController::class,'delete'])->name('admin.service.delete');
    });
    Route::group(['prefix'=>'setting'],function()
    {
        Route::get('/',[SettingController::class,'index'])->name('admin.setting');
        Route::get('/create',[SettingController::class,'create'])->name('admin.setting.create');
        Route::post('/store',[SettingController::class,'store'])->name('admin.setting.store');
        Route::get('/edit/{id}',[SettingController::class,'edit'])->name('admin.setting.edit');
        Route::post('/update/{id}',[SettingController::class,'update'])->name('admin.setting.update');
        Route::get('/delete/{id}',[SettingController::class,'delete'])->name('admin.setting.delete');
    });
    Route::group(['prefix'=>'playground'],function()
    {
        Route::get('/',[PlaygroundController::class,'index'])->name('admin.playground');
        Route::get('/edit/{id}',[PlaygroundController::class,'edit'])->name('admin.playground.edit');
        Route::post('/update/{id}',[PlaygroundController::class,'update'])->name('admin.playground.update');
        Route::get('/delete/{id}',[PlaygroundController::class,'delete'])->name('admin.playground.delete');
    });
    Route::group(['prefix'=>'staff'],function()
    {
        Route::get('/',[StaffController::class,'index'])->name('admin.staff');
        Route::get('/edit/{id}',[StaffController::class,'edit'])->name('admin.staff.edit');
        Route::post('/update/{id}',[StaffController::class,'update'])->name('admin.staff.update');
        Route::get('/delete/{id}',[StaffController::class,'delete'])->name('admin.staff.delete');
    });
    Route::group(['prefix'=>'contact'],function()
    {
        Route::get('/',[AdminContactController::class,'index'])->name('admin.contact');
        Route::get('/delete/{id}',[AdminContactController::class,'delete'])->name('admin.contact.delete');
    });
});

Route::group(['prefix'=>'owner','middleware'=>'role:owner'],function()
{
    Route::get('/',[OwnerController::class,'index'])->name('owner.index');
    Route::group(['prefix'=>'playground'],function()
    {
        Route::get('/',[OwnerPlaygroundController::class,'index'])->name('owner.playground');
        Route::get('/create',[OwnerPlaygroundController::class,'create'])->name('owner.playground.create');
        Route::post('/store',[OwnerPlaygroundController::class,'store'])->name('owner.playground.store');
        Route::get('/edit/{id}',[OwnerPlaygroundController::class,'edit'])->name('owner.playground.edit');
        Route::post('/update/{id}',[OwnerPlaygroundController::class,'update'])->name('owner.playground.update');
        Route::get('/delete/{id}',[OwnerPlaygroundController::class,'delete'])->name('owner.playground.delete');
    });
    Route::group(['prefix'=>'staff'],function()
    {
        Route::get('/',[OwnerStaffController::class,'index'])->name('owner.staff');
        Route::get('/create',[OwnerStaffController::class,'create'])->name('owner.staff.create');
        Route::post('/store',[OwnerStaffController::class,'store'])->name('owner.staff.store');
        Route::get('/edit/{id}',[OwnerStaffController::class,'edit'])->name('owner.staff.edit');
        Route::post('/update/{id}',[OwnerStaffController::class,'update'])->name('owner.staff.update');
        Route::get('/delete/{id}',[OwnerStaffController::class,'delete'])->name('owner.staff.delete');
    });
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
