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

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'employee/'], function () {
        Route::get('add','EmployeeController@add')->name('employee.add');

        Route::get('index','EmployeeController@index')->name('employee.index');

        Route::get('details/{employee}','EmployeeController@details')->name('employee.details');

        Route::post('store','EmployeeController@store')->name('employee.store');
        Route::post('update/personal-details/{employee}','EmployeeController@updatePD')->name('employee.personalDetails.update');
        Route::post('update/contact-details/{employee}','EmployeeController@updateCD')->name('employee.contactDetails.update');
        Route::post('update/emergency-contact-details/{employee}','EmployeeController@updateECD')->name('employee.emerContactDetails.update');
        Route::post('update/job-details/{employee}','EmployeeController@updateJD')->name('employee.jobDetails.update');
        Route::post('update/report-to-details/{employee}','EmployeeController@updateReportTo')->name('employee.reportToDetails.update');
        Route::post('update/services-allowances/{employee}','EmployeeController@updateServicesAllowances')->name('employee.services.allowances.update');
        Route::post('add/work-experience/{employee}','EmployeeController@addWorkExperience')->name('employee.workExperience.add');
        Route::post('add/skills/{employee}','EmployeeController@addSkills')->name('employee.skills.add');
        Route::post('add/attachments/{employee}','EmployeeController@addAttachments')->name('employee.attachment.add');
    });

    Route::get('/settings', 'SettingsController@settings')->name('settings');

    Route::get('/department-delete{d}', 'SettingsController@deleteDepartment')->name('department.delete');
    Route::get('/allowance-delete{a}', 'SettingsController@deleteAllowance')->name('allowance.delete');
    Route::get('/service-delete{s}', 'SettingsController@deleteService')->name('service.delete');
    Route::get('/Job-Title-delete{j}', 'SettingsController@deleteJobTitle')->name('job_title.delete');

    Route::post('/department-add', 'SettingsController@addDepartment')->name('department.add');
    Route::post('/allowance-add', 'SettingsController@addAllowance')->name('allowance.add');
    Route::post('/service-add', 'SettingsController@addService')->name('service.add');
    Route::post('/Job-Title-add', 'SettingsController@addJobTitle')->name('job_title.add');

    Route::get('/Organisation-General-information',function(){
        return view('organisationGeneralInformation');
    })->name('organisations.general.information');

    Route::get('/Organisation-Locations',function(){
        return view('organisationLocations');
    })->name('organisations.locations');

    Route::post('/add-organisations','HomeController@addOrganisations')->name('add.organisations');
    Route::post('/update-organisations','HomeController@updateOrganisations')->name('update.organisations');
    Route::get('/delete-organisations/{o}','HomeController@deleteOrganisation')->name('organisation.delete');

    Route::get('/leave-applications','LeavesController@index')->name('leave.applications');
    Route::get('/assign-leave','LeavesController@assign')->name('leave.assign.view');
    Route::get('/add-leave-applications','LeavesController@add')->name('leave.add.view');
    Route::post('/assign-leave','LeavesController@assignLeave')->name('leave.assign');
    Route::post('/add-leave-application','LeavesController@addLeave')->name('leave.add');
    Route::get('/assigned-leaves','LeavesController@assigned')->name('leave.assigned');
    Route::post('/leave-status','LeavesController@status')->name('leave.status');

    Route::get('/searchEmployee','LeavesController@EmployeeSearch');
    Route::get('/download/pdf/{id}','LeavesController@ShowPdf')->name('downloadPdf');

    Route::get('/holidays','HomeController@holidays')->name('holidays');

});
