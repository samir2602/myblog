<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    $name1 = "Samir";
    $name2 = "Khushi";
    return view('hello', ['name1' => $name1, 'name2' => $name2]);
});