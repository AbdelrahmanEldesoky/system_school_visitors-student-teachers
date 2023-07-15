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



Route::get('login_get','Teacher\LoginController@loginget')->name('teacher.login.get');
Route::get('login_post','Teacher\LoginController@loginpost')->name('teacher.login.post');

Route::prefix('teacher')->name('teacher.')->middleware(['auth:teacher'])->group(function () {

    Route::get('/','HomeController@index')->name('index');
    Route::resource('schedule','ScheduleController');
    Route::resource('class','ClassController');
    Route::get('student/{material_id?}/{class_id?}','StudentController@show')->name('student.show');
    Route::get('degry/{student_id?}','StudentController@index')->name('degry.index');
    Route::get('degry/{student_id?}/{material_id?}','StudentController@index')->name('degry.index');
    Route::get('degry/create/{student_id?}/{material_id?}','StudentController@create')->name('degry.create');
    Route::post('degry/store/{student_id?}/{material_id?}','StudentController@store')->name('degry.store');
    Route::get('homework/{material_id?}/{class_id?}','HomeworkController@index')->name('homework.index');
    Route::get('homework/create/{material_id?}/{class_id?}','HomeworkController@create')->name('homework.create');
    Route::post('homework/store','HomeworkController@store')->name('homework.store');
    Route::get('home_work/get/{id?}','HomeworkController@get')->name('homework.get');
    Route::get('home_work/done/{id?}','HomeworkController@done')->name('homework.done');
    Route::get('home_work/show/done/{id?}/{student_id?}','HomeworkController@showdone')->name('homework.show.done');
    Route::get('homework/download/name/{id}', 'HomeworkController@getDownload')->name('homework.download_name');

});
