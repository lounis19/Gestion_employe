<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

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
});

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/home', function(){
        return view('home');
    });

    Route::Resource('employes','EmployeController');

    Route::get('/employes/{id}/vacation','EmployeController@vacationRequest')->name('vacation.request');
    Route::get('/employes/{id}/certificate','EmployeController@certificateRequest')->name('certificate.request');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
