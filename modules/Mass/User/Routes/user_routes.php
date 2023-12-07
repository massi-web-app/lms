<?php


Route::group(['middleware'=>['web']],function (){


    //region route for register

    Route::get('/register',[
        \Mass\User\Http\Controllers\Auth\RegisterController::class,
        'showRegistrationForm'
    ])->name('register');

    Route::post('/register',[
        \Mass\User\Http\Controllers\Auth\RegisterController::class,
        'register'
    ]);

    //endregion


    //region route for login

    Route::get('/login',[
        \Mass\User\Http\Controllers\Auth\LoginController::class,
        'showLoginForm'
    ])->name('login');


    Route::post('/login',[
        \Mass\User\Http\Controllers\Auth\LoginController::class,
        'login'
    ]);
    //endregion

    //region route forgetPassword

    Route::get('password/rest',[
        \Mass\User\Http\Controllers\Auth\ForgotPasswordController::class,
        'showLinkRequestForm'
    ])->name('password.request');


    Route::post('password/rest',[
        \Mass\User\Http\Controllers\Auth\ResetPasswordController::class,
        'reset'
    ])->name('password.update');

    Route::get('password/rest/{token}',[
        \Mass\User\Http\Controllers\Auth\ResetPasswordController::class,
        'showResetForm'
    ])->name('password.reset');


    //endregion


    //region route verification


    Route::post('/email/resend',[
        \Mass\User\Http\Controllers\Auth\VerificationController::class,
        'resend'
    ])->name('verification.resend');

    Route::get('/email/verify',[
        \Mass\User\Http\Controllers\Auth\VerificationController::class,
        'show'
    ])->name('verification.notice');


    Route::get('/email/verify/{id}/{hash}',[
        \Mass\User\Http\Controllers\Auth\VerificationController::class,
        'verify'
    ])->name('verification.verify');

    //endregion verification


    //region logout
    Route::post('/logout',[
        \Mass\User\Http\Controllers\Auth\LoginController::class,
        'logout'
    ])->name('logout');

    //endregion
});

