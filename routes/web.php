<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/testimonials', function () {
    return view('welcome');
})->name('testimonials');

Route::get('/contact', function () {
    return view('welcome');
})->name('contact');

Route::get('/about', function () {
    return view('welcome');
})->name('about');
Route::get('/comments/{comment}/edit', function (Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}', function (Comment $comment) {
    $comment->update(request()->validate(['body' => 'required |string']));

    return redirect()->back();
});
