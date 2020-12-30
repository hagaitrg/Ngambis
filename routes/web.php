<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\QuizController;
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

Route::get('/jurusan', function () {
    return view('jurusan');
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
Route::get('/guru', [MateriController::class, 'index']);

Route::get('/guru-materi', function () {
    return view('guru.materi');
});

Route::get('/guru-quiz', [MateriController::class, 'title'])->name("quiz.title");
Route::post('/create_quiz', [QuizController::class, 'insert']);

Route::get('/guru-penilaian', function () {
    return view('guru.penilaian');
});

Route::get('/guru-quiz-tables', function () {
    return view('guru.quiz-tables');
});

Route::get('/guru-nilai-tables', function () {
    return view('guru.nilai-tables');
});

Route::post('/create-materi', [MateriController::class, 'insert'])->name("materi.insert");

// Routes Siswa
Route::get('/siswa', function () {
    return view('siswa.dashboard-siswa');
});

Route::get('/siswa-quiz', function () {
    return view('siswa.quiz-siswa');
});



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
