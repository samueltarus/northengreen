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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::resource('pages','PagesController');

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/teams', 'PagesController@teams')->name('teams');
Route::get('/services', 'PagesController@services')->name('services');
Route::get('/projects', 'PagesController@projects')->name('projects');
Route::get('/jobs', 'PagesController@jobs')->name('jobs');
Route::get('/mechanical ', 'PagesController@mechanical')->name('mechanical');


// Route::resource('pages','PagesController');

Route::get('/water_supply', 'ProjectController@water_supply')->name('water_supply');
Route::get('/sewage', 'ProjectController@sewage')->name('sewage');
Route::get('/construction', 'ProjectController@construction')->name('construction');
Route::get('/mechanical ', 'ProjectController@mechanical')->name('mechanical');


