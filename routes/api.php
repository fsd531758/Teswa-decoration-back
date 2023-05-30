<?php

use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ContactUsController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\QuoteRequestController;
use App\Http\Controllers\API\SectionController;
use App\Http\Controllers\API\SettingContactController;
use App\Http\Controllers\API\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'APILocalization'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'AuthController@register');
        Route::get('user/verify/{verification_code}', 'AuthController@verifyUser')->name('user.verify');
        Route::post('login', 'AuthController@login');
        Route::post('forgot-password', 'AuthController@forgetPassword');
        Route::post('reset-forgot-password', 'AuthController@resetForgottenPassword');
        Route::post('update-token', 'AuthController@updateToken');

        //home Route
        Route::get('home'          , [HomeController::class          , 'index']);
        //about Route
        Route::get('about'         , [AboutController::class         , 'index']);
        //sections Route
        Route::get('sections'      , [SectionController::class       , 'index']);
        //categories Route
        Route::get('categories'    , [CategoryController::class      , 'index']);
        //products Route
        Route::get('products'      , [ProductController::class       , 'index']);
        //single_product Route
        Route::get('products/{id}' , [ProductController::class       , 'show_product']);
        //sections Route To get Single section and categories
        Route::get('sections/{id}' , [SectionController::class       , 'show_section']);
        //contact us Route
        Route::post('contact'       , [ContactUsController::class     , 'contact']);
        //contact us Route
        Route::post('request_quote'   , [QuoteRequestController::class     , 'quote_request']);
        //Settings Route
        Route::get('setting'       , [SettingController::class       , 'index']);
        //Setting contacts Route
        Route::get('contacts'      , [SettingContactController::class, 'index']);
    });


    // authenticated routes
    Route::group(['middleware' => ['jwt.verify:api']], function () {
        Route::group(['namespace' => 'Auth'], function () {
            Route::post('logout', 'AuthController@logout');
            // user routes
            Route::get('profile', 'AuthController@profile');
            Route::post('update', 'AuthController@update');
            Route::post('change-password', 'AuthController@changePassword');
        });
    });

    // newsletter route
    Route::post('newsletter', 'NewsletterController');
});
