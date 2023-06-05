<?php

// Passiamo dei dati alla view
Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    $data = [
        'title' => 'Homepage',
        'body' => 'Hello World',
    ];
    return view('home', $data);
})->name('home');


// BONUS Creo nuove pagine about e contact
Route::get('/about', function () {
    $data = [
        'title' => 'About',
        'body' => 'About Us',
    ];
    return view('about', $data);
})->name('about');

Route::get('/contact', function () {
    $data = [
        'title' => 'Contact',
        'body' => 'Contact Us',
    ];
    return view('contact', $data);
})->name('contact');
