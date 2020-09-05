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
    return view('frontend_index');
});



//Frontend

Route::get('/','Frontend\PagesController@frontend_index');
Route::get('services','Frontend\PagesController@frontend_services');

Route::get('pricing','Frontend\PagesController@frontend_pricing');
Route::get('portfolio','Frontend\PagesController@frontend_portfolio');
Route::get('blog','Frontend\PagesController@frontend_blog');
Route::get('about','Frontend\PagesController@frontend_about');
Route::get('contact','Frontend\PagesController@frontend_contact');
Route::get('team','Frontend\PagesController@frontend_team');
Route::get('testimonials','Frontend\PagesController@frontend_testimonials');
Route::get('projects','Frontend\PagesController@frontend_projects');



