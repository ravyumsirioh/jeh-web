<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/','HomeController@index')->name('/');
Route::get('doctors','HomeController@doctors')->name('doctors');

Route::get('/doctor/{url_doctor}','HomeController@doctors_detail')->name('doctors_detail');


Route::get('abouts','HomeController@abouts')->name('abouts');
Route::get('services','HomeController@services')->name('services');
// Route::get('services_detail','HomeController@services_detail')->name('services_detail');
Route::get('/eyedisease/{url_name}','HomeController@eyediseases_detail')->name('eyediseases_detail');
Route::get('machines','HomeController@machines')->name('machines');
Route::get('faqs','HomeController@faqs')->name('faqs');
Route::get('appointments','HomeController@appointments')->name('appointments');
Route::get('single_service/{url_service}','HomeController@single_service')->name('single_service');
Route::get('locations','HomeController@locations')->name('locations');
Route::get('galleries','HomeController@galleries')->name('galleries');
Route::get('privacy-policy','HomeController@privacy_policy')->name('privacy_policy');
Route::get('prices','HomeController@prices')->name('prices');
Route::get('blogs','HomeController@blogs')->name('blogs');
Route::post('sendEmail','HomeController@sendEmail')->name('sendEmail');
Route::post('book-appointment','HomeController@BookAppointment')->name('BookAppointment');