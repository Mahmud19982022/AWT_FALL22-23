<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

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
    return view('welcome');
});
Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');

//Student routes
Route::get('/studentList',[StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentEdit/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');
Route::post('/studentEdit',[StudentController::class, 'studentEditSubmitted'])->name('studentEdit');
Route::get('/studentDelete/{id}',[StudentController::class, 'studentDelete'])->name('studentDelete');

Route::get('/studentCreate',[StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate',[StudentController::class, 'studentCreateSubmitted'])->name('studentCreateSubmitted');

//Teacher
Route::get('/teacherCreate',[TeacherController::class, 'teacherCreate'])->name('teacherCreate');
Route::post('/teacherCreate',[TeacherController::class, 'teacherCreateSubmitted'])->name('teacherCreate');
Route::get('/teacherList',[TeacherController::class, 'teacherList'])->name('teacherList');

//Teacher Course
Route::get('/teacher/courses',[TeacherController::class,'teacherCourses'])->name('teacher.courses');
//course
Route::get('/courses',[CourseController::class,'courseTeacher'])->name('teacher.courses'); 