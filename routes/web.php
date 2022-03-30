<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ServiceController;
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

Route::get("/students", [StudentController::class, "getStudents"]);
Route::get("/student", [StudentController::class, "getStudent"]);
Route::get("/newstudent", [StudentController::class, "newStudent"]);
Route::get("/updatestudent", [StudentController::class, "updateStudent"]);
Route::get("/delstudent", [StudentController::class, "deleteStudent"]);

Route::get("/list-student", [StudentController::class, "listStudent"]);

Route::get("/insert-student", [StudentController::class, "insertStudent"]);

Route::get("{local}/service", [ServiceController::class,"service"]);