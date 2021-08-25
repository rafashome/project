<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
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

// return index page
Route::get('/', [IndexController::class, 'index']);

// add category

Route::get('/add_category', [CategoryController::class, 'index']);

// insert data into category table
Route::post('/insert_category', [CategoryController::class, 'store']);

// view data from category
Route::get('/view_category', [CategoryController::class, 'view']);

// Delete Category Record

Route::get('/category_delete/{id}', [CategoryController::class, 'category_delete'] );

// edit category
Route::get('/edit/{id}', [CategoryController::class, 'edit'] );

// update category

Route::post('/update/{id}', [CategoryController::class, 'update'] );






// Course Routing
// add course

Route::get('/add_course',[CourseController::class, 'index']);


// insert data into category table
Route::post('/insert_course', [CourseController::class, 'store']);

// view course table

Route::get('/view_course',[CourseController::class, 'view']);

// Delete course Record

Route::get('/course_delete/{id}', [CourseController::class, 'course_delete'] );


// edit course
Route::get('/edit/{id}', [CourseController::class, 'edit'] );

// update course

Route::post('/update/{id}', [CourseController::class, 'update'] );
