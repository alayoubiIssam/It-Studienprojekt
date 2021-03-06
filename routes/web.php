<?php

Route::get('/token', function (){
   $token = auth()->user()->generateConfirmationToken();

   dd($token);
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard', 'DashboardController@index');
});

/**
 * Account
 */
Route::group(['prefix' =>'account', 'middleware' => ['auth'], 'as'=>'account.'], function (){
    Route::get('/', 'Account\AccountController@index')->name('index');


    /**
     * Profile
     */
    Route::get('profile', 'Account\ProfileController@index')->name('profile.index');

    Route::post('profile', 'Account\ProfileController@store')->name('profile.store');

    /**
     * Password
     */
    Route::get('password', 'Account\PasswordController@index')->name('password.index');
    Route::Post('password', 'Account\PasswordController@store')->name('password.store');


});

/**
 * Account activation
 */
Route::group(['prefix' => 'activation', 'as' => 'activation.', 'middleware' => ['guest']], function (){
    Route::get('/resend', 'Auth\ActivationResendController@index')->name('resend');
    Route::post('/resend', 'Auth\ActivationResendController@store')->name('resend.store');
    Route::get('/{confirmation_token}', 'Auth\ActivationController@activate')->name('activate');

});


/**
 * Account activation
 */
Route::group(['prefix' => 'plans', 'as' => 'plans.'], function (){
    Route::get('/', 'subscription\PlanController@index')->name('index');
    Route::get('/teams', 'subscription\PlanTeamController@index')->name('teams.index');

});
