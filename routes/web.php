<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\HaloController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/halo/index', [HaloController::class, 'index'])->name('halo.index');

// Route::get('/', function()  {return view ('index');});
Route::get('/aboutUs', function()  {return view('aboutUs');});
Route::get('/brandPartner', function()  {return view('brandPartner');});
Route::get('/services', function()  {return view('services');});
Route::get('/galery', function()  {return view('galery');});

