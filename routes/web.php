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

Route::get('/', 'homeController@home')->name('home');
Route::get('/about', 'homeController@about')->name('about');
Route::get('/teams', 'homeController@teams')->name('teams');
Route::get('/services', 'homeController@services')->name('services');
Route::get('/projects', 'homeController@projects')->name('projects');
Route::get('/jobs', 'homeController@jobs')->name('jobs');

