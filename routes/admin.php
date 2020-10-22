<?php

include "default/default.php";


use Illuminate\Support\Facades\Route;

/**
 * Attention
 * Don't Change This Routes For Authentication you can find the pre-requirements in Provider/RouteServicesProvider
 * **************************************************************
 * ************** Provider/RouteServicesProvider ****************
 * ***************************************************************
 */
Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login_page');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');
});


Route::group( ['middleware' => ['auth:admin']], function () {

    /**
     * ********************************************
     * ****** Start DashboardController ***********
     * ********************************************
     */
    Route::get('/','Dashboard\DashboardController@index')->name('index');
    Route::get('dashboard','Dashboard\DashboardController@index')->name('index');
    Route::get('mode/{mode}','Dashboard\DashboardController@mode');
    /**
     * ********************************************
     * ****** End DashboardController *************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start UserManagementController ******
     * ********************************************
     */
    Route::resource('permission','UserManagement\PermissionController')->only('update');
    Route::resource('role','UserManagement\RoleController')->except(['create','show', 'edit']);
    Route::resource('user-management','UserManagement\UserManagementController')->except(['create','show', 'edit']);
    /**
     * ********************************************
     * ****** End UserManagementController ********
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start UserController ****************
     * ********************************************
     */
    Route::resource('users','Users\UsersController');
    Route::get('users/{id}/approve','Users\UsersController@approve')->name('user_approve');
    Route::get('disapprove/{id}','Users\UsersController@get_disapprove')->name('get_disapprove');
    Route::post('disapprove/{id}','Users\UserMailController@send_disapprove_mail')->name('send_disapprove_mail');
    /**
     * ********************************************
     * ****** End UserController ******************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start AdController ******************
     * ********************************************
     */
    Route::resource('ads','Ads\AdsController');
    /**
     * ********************************************
     * ****** End AdController ********************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start CountriesController ***********
     * ********************************************
     */
    Route::resource('countries','Countries\CountriesController');
    Route::resource('cities','Cities\CitiesController');
    /**
     * ********************************************
     * ****** End CountriesController *************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start BankAccountController *********
     * ********************************************
     */
    Route::resource('bank-accounts','BankAccounts\BankAccountsController');
    /**
     * ********************************************
     * ****** End BankAccountController ***********
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start PageController ****************
     * ********************************************
     */
    Route::resource('pages','Pages\PagesController');
    /**
     * ********************************************
     * ****** End PageController ******************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start ArticleController *************
     * ********************************************
     */
    Route::resource('articles','Articles\ArticlesController');
    /**
     * ********************************************
     * ****** End ArticleController ***************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start SectionController *************
     * ********************************************
     */
    Route::resource('sections','Sections\SectionsController');
    /**
     * ********************************************
     * ****** End SectionController ***************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start CodeController ****************
     * ********************************************
     */
    Route::get('codes','Codes\CodesController@index')->name('codes.index');
    Route::post('codes','Codes\CodesController@update')->name('codes.update');
    /**
     * ********************************************
     * ****** End CodeController ******************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start ContactController **************
     * ********************************************
     */
    Route::get('contacts','Contacts\ContactsController@index')->name('contacts.index');
    Route::post('contacts/{id}/destroy','Contacts\ContactsController@destroy')->name('contacts.destroy');
    Route::get('contacts/{id}/show','Contacts\ContactsController@show')->name('contacts.show');
    Route::get('contacts/{id}/reply','Contacts\ContactsController@reply')->name('get_contact_reply');
    Route::post('contacts/{id}/reply','Contacts\ContactsController@send_reply')->name('contacts.reply');
    /**
     * ********************************************
     * ****** End ContactController ***************
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start NotificationController ********
     * ********************************************
     */
    Route::get('/read','Notifications\NotificationsController@read')->name('read');
    /**
     * ********************************************
     * ****** End NotificationController **********
     * ********************************************
     */

    /**
     * ********************************************
     * ****** Start WebsiteDetailsController ******
     * ********************************************
     */
    Route::resource('website','WebsiteDetails\WebsiteDetailsController');
    /**
     * ********************************************
     * ****** End WebsiteDetailsController ********
     * ********************************************
     */





        /**
     * ********************************************
     * ****** Start ExpertisesController ******
     * ********************************************
     */
    Route::resource('expertises','Expertises\ExpertisesController');
      /**
     * ********************************************
     * ****** End ExpertisesController ********
     * ********************************************
     */

        /**
     * ********************************************
     * ****** Start RegionsController ********
     * ********************************************
     */
    Route::resource('regions','Regions\RegionsController');
          /**
     * ********************************************
     * ****** End RegionsController ********
     * ********************************************
     */

             /**
     * ********************************************
     * ****** Start JobsController ********
     * ********************************************
     */

     Route::resource('jobs','Jobs\JobsController');

             /**
     * ********************************************
     * ****** End JobsController ********
     * ********************************************
     */

                  /**
     * ********************************************
     * ****** Start CompaniesController ********
     * ********************************************
     */

     Route::resource('companies','Companies\CompaniesController');

        // Start Sections
        Route::resource('companies_banner','Companies\BannersController');
        Route::resource('companies_feature','Companies\FeaturesController');
        Route::post('get_feature_data','Companies\FeaturesController@getFeatureData')->name('getFeatureData');
        Route::resource('companies_rules','Companies\RulesController');
        Route::put('getRuleImageCompanies','Companies\RulesController@getImage')->name('getRuleImageCompanies');
             /**
     * ********************************************
     * ****** End CompaniesController ********
     * ********************************************
     */

                       /**
     * ********************************************
     * ****** Start CorporationsController ********
     * ********************************************
     */

     Route::resource('corporations_admin','Corporations\CorporationsController');

    //   Start Sections
    Route::resource('corporations_banner','Corporations\BannersController');
    Route::resource('corporations_features','Corporations\FeaturesController');
    Route::resource('corporations_rules','Corporations\RulesController');
    Route::put('getImage','Corporations\BannersController@getImage')->name('getImage');
    Route::put('getFeatureImage','Corporations\FeaturesController@getImage')->name('getFeatureImage');
        Route::put('getRuleImage','Corporations\RulesController@getImage')->name('getRuleImage');

             /**
     * ********************************************
     * ****** End CorporationsController ********
     * ********************************************
     */

                                 /**
     * ********************************************
     * ****** Start JobSeekerController ********
     * ********************************************
     */

     Route::resource('job_seeker_admin','JobSeekers\JobSeekerController');

    //  start sections
    Route::resource('jobSeekerBanner','JobSeekers\BannersController');
             /**
     * ********************************************
     * ****** End HomeController ********
     * ********************************************
     */

                            /**
     * ********************************************
     * ****** Start HomeController ********
     * ********************************************
     */

     Route::resource('home_admin','Home\HomeController');
        //Start Sections
        Route::post('get_banner_data','Home\HomeController@getBannerData')->name('getBannerData');
             /**
     * ********************************************
     * ****** End HomeController ********
     * ********************************************
     */



    /**
     * ********************************************
     * ****** Start OtherWebsites ********
     * ********************************************
     */

    Route::resource('other-websites-upper-banner','OtherWebsites\UpperBannerController');
    Route::resource('other-websites-lower-banner','OtherWebsites\LowerBannerController');
    Route::resource('other-websites-free','OtherWebsites\FreeWebsitesController');
    Route::resource('other-websites-paid','OtherWebsites\PaidWebsitesController');

    /**
     * ********************************************
     * ****** End OtherWebsites ********
     * ********************************************
     */


});


