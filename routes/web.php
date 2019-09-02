<?php

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::group(['middleware' => ['auth']], function () {
    

    Route::group(['prefix' => 'employee/'], function () {
        Route::get('add','EmployeeController@add')->name('employee.add');

        Route::get('index','EmployeeController@index')->name('employee.index');

        Route::get('details/{employee}','EmployeeController@details')->name('employee.details');

        Route::post('store','EmployeeController@store')->name('employee.store');
        Route::post('update/personal-details/{employee}','EmployeeController@updatePD')->name('employee.personalDetails.update');
        Route::post('update/contact-details/{employee}','EmployeeController@updateCD')->name('employee.contactDetails.update');
        Route::post('update/emergency-contact-details/{employee}','EmployeeController@updateECD')->name('employee.emerContactDetails.update');
    });


});
