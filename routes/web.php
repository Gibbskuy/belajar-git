<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat Datang di Webb Saya <br>'
        . 'Laravel, Memang keren.';
    });

    Route::get('/animals', function () {
        $king = "Lion";
        $hewan = ["Monkey", "Dragonfly", "Tiger", "Butterfly", "Crocodile"];
        return view('animals_page', compact('king','hewan'));
           
        });