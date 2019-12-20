<?php

Route::get('/', function () {
    $task = [
        'Go to the store',
        'Go to the market',
        'Go to the work',
    ];

    return view('welcome', [ 'tasks' => $task]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});