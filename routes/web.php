<?php

use App\Http\Controllers\Authentication\AuthenticateController;
use App\Http\Controllers\BirthCertController;
use App\Http\Controllers\DeathCertController;
use App\Http\Controllers\Driver\DriverController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['web', 'guest'])->group(function(){
    Route::get('/', [AuthenticateController::class, 'index'])->name('login');
    Route::post('/authenticate', [AuthenticateController::class, 'authenticate'])->name('login.authenticate');
});

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
        return view('pages.dashboard.dashboard');
    })->name('dashboard.index');

    Route::group(['prefix'=>'driver', 'controller'=> DriverController::class],function(){
        Route::get('/list','list')->name('driver.list');
        Route::get('/create',function(){
            return view('pages.driver.create');
        })->name('driver.create');
    });

    Route::resource('birth', BirthCertController::class);
    Route::resource('death', DeathCertController::class);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
