<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome' , [
        'home' => app(\App\Settings\HomepageSettings::class),
        'posts' => \App\Models\Post::query()
            ->where('is_active' , true)
            ->orderByDesc('id')
            ->limit(4)
            ->get()
    ]);
});

Route::get('/page/{Page:slug}', function (\App\Models\Page $Page) {
    return view('page' , ['page' => $Page]);
})->name('page');


Route::get('/service/{Service:slug}', function (\App\Models\Service $Service) {
    return view('service' , ['service' => $Service]);
})->name('service');
Route::view('/services', 'services')->name('services');

Route::get('/infrastructure/{Infrastructure:slug}', function (\App\Models\Infrastructure $Infrastructure) {
    return view('infrastructure' , ['infrastructure' => $Infrastructure]);
})->name('infrastructure');
Route::view('/infrastructures', 'infrastructures')->name('infrastructures');

Route::get('/article/{Post:slug}', function (\App\Models\Post $Post) {
    return view('post' , ['post' => $Post]);
})->name('post');
Route::get('/news-and-articles', function (\App\Models\Post $Post) {
    return view('posts' , ['posts' => \App\Models\Post::query()
        ->where('is_active' , true)
        ->orderByDesc('id')
        ->get()]);
})->name('posts');
