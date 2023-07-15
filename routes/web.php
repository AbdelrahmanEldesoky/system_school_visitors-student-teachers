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


Route::group(['middleware'=>'guest'],function (){
    Route::get('school/login/get', 'TestController@login')->name('student.login.get');
    Route::post('school/login', 'TestController@login_store')->name('student.login.post');

});



Route::get('/', 'TestController@index')->name('index');
Route::get('index', 'TestController@website')->name('website');

Route::get('about', 'TestController@about')->name('about');
Route::get('excelling', 'TestController@excelling')->name('excelling');
Route::get('Questions', 'TestController@Questions')->name('Questions');
Route::get('News', 'TestController@News')->name('News');


Route::get('Delays', 'TestController@Delays')->name('Delays');
Route::get('Activities', 'TestController@Activities')->name('Activities');
Route::get('teacher', 'TestController@teacher')->name('teacher');

    Route::get('new_application', 'TestController@new_application')->name('new_application');
    Route::post('new_application_post', 'TestController@new_application_post')->name('new_application_post');

    Route::get('old_application', 'TestController@old_application')->name('old_application');
    Route::post('old_application_post', 'TestController@old_application_post')->name('old_application_post');
############################# Student #################################

    Route::prefix('student')->name('student.')->middleware(['auth:student'])->group(function () {

    Route::get('/', 'TestController@Student')->name('index');
    Route::get('grades', 'TestController@grades')->name('grades');
    Route::get('schedule', 'TestController@schedule')->name('schedule');
    Route::get('logout', 'TestController@logout')->name('logout');
    Route::get('homework', 'TestController@homework')->name('homework');
    Route::get('homework/{id}', 'TestController@homework_show')->name('homework.show');
    Route::get('homework/download/{id}', 'TestController@getDownload')->name('homework.download');
    Route::post('homework/uplaod', 'TestController@uplaod')->name('homework.upload');
    Route::get('homework/solution/{id}', 'TestController@solution')->name('homework.solution');

});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
