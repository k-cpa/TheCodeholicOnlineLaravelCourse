<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $person = [
        'name' => 'Zura',
        'email' => 'zura@exemple.com',
    ];
    dd($person);
    return view('welcome');
});

Route::view('/about', 'about');