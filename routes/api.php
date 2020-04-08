<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('employees', 'Api\EmployeeController');
Route::apiResource('department', 'Api\DepartmentController');
Route::apiResource('employees.titles', 'Api\TitleController')->except('delete');
Route::get('employees/{employee}/title', 'Api\TitleController@current');
