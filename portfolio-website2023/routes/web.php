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
    return view('pages/home');
});
Route::get('/over-mij', function () {
    return view('pages/about');
});
Route::get('/blog', function () {
    return view('pages/blog');
});
Route::get('/vaardigheden', function () {
    return view('pages/skills');
});
Route::get('/ervaring', function () {
    return view('pages/experience');
});
Route::get('/projecten', function () {
    return view('pages/projects');
});
Route::get('/contact', function () {
    return view('pages/contact');
});