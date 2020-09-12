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

Route::get('/', function () {


    return 'by Khin Sapal';

});

Route::get('/testing',function ($value='')
{
	return 'This is testing page!';
});

Route::resource('students','StudentController');

Route::resource('deceaseds','DeceasedController@deceased');

