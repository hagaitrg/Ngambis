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
    return view('hello');
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



//Auth
// Route::middleware('auth')->group(function () {


//     Route::middleware('role:admin')->group(function () {
//     });

//     Route::middleware('role:guru')->group(function () {
//         Route::get('/guru', function () {
//             return view('guru.dashboard-guru');
//         });
//     });

//     Route::middleware('role:siswa')->group(function () {
//         Route::get('/siswa', function () {
//             return view('siswa.dashboard-siswa');
//         });
//     });
// });


// Feedback Controller on Admin Routes
Route::get('/feedback', [FeedbackController::class, 'index']);

Route::get('/admin', [FeedbackController::class, 'Dashboardindex']);

Route::delete('/delete/{id}', [FeedbackController::class, 'destroy']);

Route::get('edit-feedback/{id}', [FeedbackController::class, 'edit']);

Route::patch('/update/{id}', [FeedbackController::class, 'update']);

Route::post('/proses-feedback', [FeedbackController::class, 'create']);

Route::get('/users', function () {
    return view('admin.users');
});

// Guru Routes 
Route::get('/guru', function () {
    return view('guru.dashboard-guru');
});

Route::get('/guru-materi', function () {
    return view('guru.materi');
});

Route::get('/guru-quiz', function () {
    return view('guru.quiz');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
