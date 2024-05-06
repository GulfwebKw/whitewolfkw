<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/{Page:slug}', function (\App\Models\Page $Page) {
    return view('page' , ['page' => $Page]);
})->name('page');


Route::get('/service/{Service:slug}', function (\App\Models\Service $Service) {
    return view('service' , ['service' => $Service]);
})->name('service');

Route::view('/services', 'services')->name('services');
