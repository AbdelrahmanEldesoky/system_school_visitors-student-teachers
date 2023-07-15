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




    Route::prefix('admin')->name('dashboard.')->middleware(['auth'])->group(function () {

    Route::get('/','HomeController@index');
    Route::resource('school','SchoolYearController');
    Route::resource('class','ClassController');
    Route::resource('material','MaterialController');
    Route::resource('teacher','TeacherController');
    Route::resource('schedule','StudyScheduleController');
    Route::resource('student','StudentController');
    Route::resource('parent','ParentController');
    Route::resource('activity','ActivityController');
    Route::resource('about','AboutController');
    Route::resource('news','NewsController');
    Route::get('parent/student/create/{parent_id?}','ParentController@student')->name('parent.student.create');
    Route::post('parent/student/store','ParentController@student_store')->name('parent.student.store');

    Route::get('expenses/{year_id?}/{id?}','ExpensesController@index')->name('expenses.index');
    Route::get('expenses/create/{year_id?}/{id?}','ExpensesController@create')->name('expenses.create');
    Route::post('expenses/store','ExpensesController@store')->name('expenses.store');
    Route::resource('job','JobController');
    Route::get('job/download/{id}', 'JobController@getDownload')->name('job.download');
    Route::get('job/status/{status}', 'JobController@status')->name('job.status');

    });
