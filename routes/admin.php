<?php

use App\Http\Controllers\Dashboard\ContactRequestController;
use App\Http\Controllers\Dashboard\QuoteRequestController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::prefix('dashboard')->group(function () {

        //admin login
        Route::get('login', 'Auth\AuthController@login')->name('dashboard.login')->middleware('guest:admin');
        Route::post('authenticate', 'Auth\AuthController@authenticate')->name('authenticate');

        Route::middleware(['auth:admin'])->group(function () {
            Route::get('/', 'Auth\AuthController@home')->name('admin.home');
            Route::get('logout', 'Auth\AuthController@logout')->name('admin.logout');

            //role routes
            Route::resource('roles', 'RoleController');

            //admin users routes
            Route::resource('admin-users', 'AdminUserController');
            Route::get('my-profile', 'AdminUserController@profile')->name('admin.profile');
            Route::put('my-profile/{id}/update', 'AdminUserController@updateProfile')->name('admin.profile.update');

            //slider routes
            Route::resource('sliders', 'SliderController');

            //category routes
            Route::resource('sections', 'SectionController');

            //category routes
            Route::resource('categories', 'CategoryController');

            //product routes
            Route::resource('products', 'ProductController');

            //colors routes
            Route::resource('colors', 'ColorController');

            //product routes
            Route::resource('services', 'ServiceController');

            //product routes
            Route::resource('experiences', 'ExperienceController');

            //partners routes
            Route::resource('partners', 'PartnerController');

            //pages routes
            Route::resource('pages', 'PageController');

            //contact routes
            Route::resource('contacts', 'SettingContactController');

            //contact routes
            Route::resource('contact_requests', 'ContactRequestController');
            Route::get('contact_requests/{contact_request}/reply', [ContactRequestController::class, 'reply'])->name('contact_requests.reply');
            Route::post('contact_requests/{contact_request}/send_mail', [ContactRequestController::class, 'send_mail'])->name('contact_requests.send_mail');

            //Quote Request routes
            Route::resource('quote_requests', 'QuoteRequestController');
            Route::get('quote_requests/{quote_request}/reply', [QuoteRequestController::class, 'reply'])->name('quote_requests.reply');
            Route::post('quote_requests/{quote_request}/send_mail', [QuoteRequestController::class, 'send_mail'])->name('quote_requests.send_mail');

            //news-letter routes
            Route::resource('news-letters', 'NewsLetterController');
            Route::get('subscribed-users', 'NewsLetterController@subscribedUsers')->name('news-letters.subscribed');
            Route::post('subscribed-users/delete/{id}', 'NewsLetterController@deleteSubscribedUsers')->name('news-letters.delete_subscribed_users');

            //setting routes
            Route::resource('settings', 'SettingController');
        });
    });
});

Route::get('unsubscribe/{id}', 'NewsLetterController@unsubscribe')->name('news-letters.unsubscribe');
Route::post('unsubscribe/action', 'NewsLetterController@unsubscribeAction')->name('news-letters.unsubscribe_action');
Route::get('unsubscribe/confirmation', function () {
    return view('admin.news_letters.unsubscribe_confirmation');
})->name('news-letters.unsubscribe_confirmation');