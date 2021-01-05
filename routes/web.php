<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MatpelController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Middleware\Role;
use App\Models\Matpel;
use Illuminate\Support\Facades\Auth;
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
Route::middleware('auth')->group(function () {


    Route::middleware('role:admin')->group(function () {
        Route::get('/feedback', [FeedbackController::class, 'index']);

        Route::get('/admin', [FeedbackController::class, 'Dashboardindex']);

        Route::delete('/delete/{id}', [FeedbackController::class, 'destroy']);

        Route::get('edit-feedback/{id}', [FeedbackController::class, 'edit']);

        Route::patch('/update/{id}', [FeedbackController::class, 'update']);

        Route::get('/admin/matpel', [AdminController::class, 'index'])->name('admin.matpel.index');

        Route::get('/admin/matpel/{matpelId}', [AdminController::class, 'edit'])->name('admin.matpel.edit');

        Route::put('/admin/matpel/{matpelId}', [AdminController::class, 'update'])->name('admin.matpel.update');

        Route::get('/admin-matpel', [MatpelController::class, 'indexAdmin']);
    });

    Route::middleware('role:guru')->group(function () {
        // Route::get('/guru', function () {
        //     return view('guru.dashboard-guru');
        // });

        Route::get('/guru', [MateriController::class, 'index']);

        Route::get('/guru-quiz', [MateriController::class, 'title'])->name("quiz.title");
        Route::post('/create_quiz', [QuizController::class, 'insert']);

        Route::get('/guru-materi', function () {
            return view('guru.materi');
        });



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

        Route::get('/penilaian', [GuruController::class, 'index'])->name('guru.penialaian.index');
        Route::get('/penilaian/materi/{matpelId}', [GuruController::class, 'getListQuizByMatpel'])->name('guru.getListQuizByMatpel');
    });

    Route::middleware('role:siswa')->group(function () {

        Route::get('/siswa', [MatpelController::class, 'indexSiswa'])->name('matpel.index');

        Route::get('/siswa-quiz', function () {
            return view('siswa.quiz-siswa');
        });

        Route::get('/materi/{matpelId}', [MateriController::class, 'getListMateri'])->name('materi.getMateriList');

        Route::get('/materi/{materiId}/detail', [MateriController::class, 'getDetailMateri'])->name('materi.getDetailMateri');

        Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');

        Route::get('/quiz/{matpelId}', [QuizController::class, 'getQuizEachMateri'])->name('quiz.getQuizEachMateri');

        Route::get('/quiz/{materiId}/soal', [QuizController::class, 'getSoalByMateriId'])->name('quiz.getSoalByMateriId');

        Route::post('/quiz/soal/{soalId}', [QuizController::class, 'saveAnswerForSoal'])->name('quiz.saveAnswerForSoal');

        Route::get('/jawaban/{soalId}', [QuizController::class, 'getJawaban'])->name('quiz.getJawaban');
    });
});


// Feedback Controller on Admin Routes


Route::post('/proses-feedback', [FeedbackController::class, 'create']);


// Guru Routes


// Routes Siswa


// Route admin


// Route quiz



// Route Penilaian




Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
