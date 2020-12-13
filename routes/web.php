<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('regis');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/admin', [FeedbackController::class, 'index']);

Route::post('/proses-feedback', [FeedbackController::class, 'create']);

Route::delete('/delete/{id}', [FeedbackController::class, 'destroy']);

Route::get('edit-feedback/{id}', [FeedbackController::class, 'edit']);

Route::patch('/update/{id}', [FeedbackController::class, 'update']);
