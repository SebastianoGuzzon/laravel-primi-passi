<?php
Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    $data = [
        'title' => 'Homepage',
        'body' => 'Hello World',
    ];
    return view('home', $data);
});

