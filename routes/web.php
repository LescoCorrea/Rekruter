<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/jobs', function () {
    return view('frontend.jobs');
});
Route::get('/company', function () {
    return view('frontend.company');
});
Route::get('/employe', function () {
    return view('frontend.employe');
});
Route::get('/signip', function () {
    return view('frontend.signip');
});
Route::get('/signup', function () {
    return view('frontend.signup');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/detail-jobs', function () {
    return view('frontend.detail-jobs');
});
Route::get('/price', function () {
    return view('frontend.price');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/detail-com', function () {
    return view('frontend.detail-com');
});
