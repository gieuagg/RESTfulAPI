<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/**
* @group Courses
*
*/
Route::get('/courses', [CourseController::class, 'index']);

/**
* @group Courses
* @urlParam id required
*
*Get details of a specific course
*/
Route::get('/courses/{id}', [CourseController::class, 'show']);

/**
* @group Courses
* @bodyParam string. The required Title of the course
* @bodyParam string. The required description of the course
* @bodyParam string. The required status of the course
* @bodyParam boolean. The required is_premium of the course
*
*Create a new course
*/
Route::post('/courses', [CourseController::class, 'store']);

/**
* @group Courses
* @urlParam The required id of the course
* @bodyParam string. The required Title of the course
* @bodyParam string. The required description of the course
* @bodyParam string. The required status of the course
* @bodyParam boolean. The required is_premium of the course
*
*Update an existing  course
*/
Route::put('courses/{id}', [CourseController::class, 'update']);

/**
* @group Courses
* @urlParam the required id of the course
*
*Delete a specific course
*/
Route::delete('courses/{id}', [CourseController::class, 'destroy']);
