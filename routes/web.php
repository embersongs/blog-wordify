<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::view('/post', 'posts.show')->name('post.show');

Route::post('/find', function () {
    dump($_POST);
    return;
})->name('find');
