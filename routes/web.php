<?php

include "default/default.php";


use Illuminate\Support\Facades\Route;




Route::get('/artisan',function(){
  Artisan::call('vendor:publish');
});






/**
 * Attention
 * Don't Change This Routes For Authentication you can find the pre-requirements in
 * **************************************************************
 * ************** Provider/RouteServicesProvider ****************
 * ***************************************************************
 */
Route::group(['namespace' => 'Auth'], function () {

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login_page');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');

    // Registration User With Laravel ...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register_page');
    Route::post('register', 'RegisterController@register')->name('register');
    Route::get('register/activate/{token}', 'Auth\RegisterController@confirm')->name('email_confirm');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

});



/**
 * Attention
 * This Routes For Front Website That don't have any restrictions
 * **************************************************************
 * ************** Provider/RouteServicesProvider ****************
 * ***************************************************************
 */
// Route::view('/', 'welcome');


// *** Job Seeker Pages *** //
Route::group(['namespace' => 'Front\job_seeker'], function () {

    Route::get('/job-seeker','JobSeekerController@index');
    Route::get('/job-seeker/job-seeker-add','JobSeekerController@create');
    Route::post('job-seeker-store','JobSeekerController@store')->name('job-seeker.store');
});
// *** Ajax Rquests *** //
Route::group(['namespace' => 'Ajax'], function () {
    Route::get('get-regions','Regions\RegionsAjaxController@get_regions')->name('get_regions');
    Route::get('get-cities','Cities\CitiesAjaxController@get_cities')->name('get_cities');
    Route::get('get-region-cities','Cities\CitiesAjaxController@get_region_cities')->name('get_region_cities');
});

// *** Home Page *** //
Route::group(['namespace' => 'Front\home'], function () {
    Route::get('/', 'HomeController@index');
});



// *** Corporation Controller *** //
Route::group(['namespace' => 'Front\Corporations'], function () {
    Route::resource('corporations','CorporationsController');
});

// *** Companies Controller *** //
Route::group(['namespace' => 'Front\Companies'], function () {
    Route::resource('companies','CompaniesController');
});

// *** Centers Controller *** //
Route::group(['namespace' => 'Front\Centers'], function () {
    Route::resource('centers','CentersController');
});

// *** Corporations Controller *** //
Route::group(['namespace' => 'Front\Corporations'], function () {
    Route::resource('corporations','CorporationsController');
});

// Route::get('/business-owner',function(){
//     return view('user.front.business_owner.index');
// });

Route::get('/training-courses',function(){
    return view('user.front.training_courses.index');
});

Route::get('/services',function(){
    return view('user.front.services.index');
});
Route::get('/questions',function(){
    return view('user.front.questions.index');
});
Route::get('/job-application',function(){
    return view('user.front.job-application.index');
});

// *** Other Websites *** //
Route::get('other-websites','Front\OtherWebsites\OtherWebsitesController@index')->name('other-websites.index');

// *** Usage List *** //
Route::get('usage-list','Front\UsageList\UsageListController@index')->name('usage-list.index');

// *** Mail List *** //
Route::get('mail-list','Front\MailList\MailListController@index')->name('mail-list.index');

// *** Saudi Jobs *** //
Route::get('saudi-jobs','Front\SaudiJobs\SaudiJobsController@index')->name('saudi-jobs.index');

// *** Users Area *** //
Route::get('users-area','Front\UserArea\UserAreaController@index')->name('users-area.index');

















/**
 * Attention
 * This Routes For User Page That has Restrictions
 * **************************************************************
 * ************** Provider/RouteServicesProvider ****************
 * ***************************************************************
 */
Route::group( ['middleware' => ['auth']], function () {

    Route::get('/dashboard', 'Dashboard\DashboardController')->name('dashboard');

});


