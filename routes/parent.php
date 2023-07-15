<?php

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


############################# Student #################################

    Route::prefix('parent')->name('parent.')->middleware(['auth:parent'])->group(function () {

    Route::get('/', 'ParentController@student')->name('index');
    Route::get('student/{student_id?}', 'ParentController@choose')->name('student');
    Route::get('grades/{student_id?}', 'ParentController@grades')->name('grades');
    Route::get('schedule/{student_id?}', 'ParentController@schedule')->name('schedule');
    Route::get('logout', 'ParentController@logout')->name('logout');
    Route::get('homework/{student_id?}', 'ParentController@homework')->name('homework');
    Route::get('homework_show/{id}', 'ParentController@homework_show')->name('homework.show');
    Route::get('expenses/{student_id?}', 'ParentController@expenses')->name('expenses');

});



