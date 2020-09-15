<?php

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




Route::get('dashboard', 'BackendController@dashboardfun'
)->name('dashboardpage');
Route::resource('cities','CityController');
Route::resource('helpservices','HelpserviceController');
Route::resource('recovereds','RecoveredController');
Route::resource('comfirmeds','ComfirmedController');
Route::resource('deceaseds','DeceasedController');
Route::resource('testeds','TestedController');






//Route::resource('students','StudentController');

//Route::resource('actives','ActiveController');


//wyne
// Route::resource('cities','CityController');




