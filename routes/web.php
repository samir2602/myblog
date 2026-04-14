<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function(){
//     $name1 = "Samir";
//     $name2 = "Khushi";
//     return view('hello', ['name1' => $name1, 'name2' => $name2]);
// });

Route::get('hello', [PageController::class, 'hello']);
Route::get('about', [PageController::class, 'about']);

Route::get('/posts', [PageController::class, 'posts']);
Route::get('/posts/create', [PageController::class, 'create']);
Route::get('posts/{id}', [PageController::class, 'show']);
Route::post('/posts', [PageController::class, 'store']);
Route::get('/posts/{id}/edit', [PageController::class, 'edit']);
Route::put('/posts/{id}', [PageController::class, 'update']);
Route::delete('/posts/{id}', [PageController::class, 'destroy']);