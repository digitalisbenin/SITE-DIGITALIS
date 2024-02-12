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
    return view('welcome');
});
Route::get('/a-propos', function () {
    return view('apropos');
});
Route::get('/referencement-sem', function () {
    return view('service6');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/creation-site-web', function () {
    return view('service');
});
Route::get('/solutions-numeriques', function () {
    return view('services');
});

Route::get('/gestion-medias-sociaux', function () {
    return view('service2');
});
Route::get('/conception-graphique', function () {
    return view('service3');
});
Route::get('/production-vidéo', function () {
    return view('service4');
});
Route::get('/redaction-web', function () {
    return view('service5');
});
Route::get('/a-propos', function () {
    return view('apropos');
});
Route::get('/referencement-sem', function () {
    return view('service6');
});
