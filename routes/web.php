<?php

use Illuminate\Support\Facades\Route;

//
use App\Http\Controllers\LegalConnectApiManageController;
use App\Http\Controllers\PageManageController;


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


/**
 * 
*/

// composer require guzzlehttp/guzzle

Route::group(['prefix' => 'legalconnect', 'as' => 'legal.'], function(){
    Route::controller(PageManageController::class)->group(function(){
        Route::get('login', 'login')->name('login');
        Route::get('register', 'register')->name('register');
    });

    Route::controller(LegalConnectApiManageController::class)->group(function(){
        Route::post('register/action', 'register_action')->name('register.action');
        Route::get('demo', 'demo')->name('demo');
    });
});