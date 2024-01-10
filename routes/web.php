<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

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
});
Route::get('/login',  [StudentController::class, 'show'])->name('student.login');

Route::post('/login', [StudentController::class, 'login'])->name('students.login');

Route::middleware('customauth:student')->prefix('/students')->group(function () {

    Route::get('/{student}', [StudentController::class, 'index']);



    Route::get('/{student}/edit-passport', [StudentController::class, 'showPassport'])->name('edit.img');

    Route::patch('/{student}/update-email', [StudentController::class, 'updateEmail'])->name('update.email');
    Route::patch('/{student}/update-phone', [StudentController::class, 'updatePhone'])->name('update.phone');

    Route::patch('/{student}/update-passport', [StudentController::class, 'updatePassport'])->name('update.img');  

    Route::delete('/logout', [StudentController::class, 'destroy'])->name('student.logout');

});

//TODO group route
// Route::get('/{student}', [StudentController::class, 'index']);


// Route::group(['middleware' => ['student']], function () {
//     Route::get('/student/{student}', [StudentController::class, 'index']);
// });

Route::get('/register/create', [StudentController::class, 'create']);
Route::post('/register', [StudentController::class, 'store'])->name('students.register');



