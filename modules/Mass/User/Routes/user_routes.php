<?php


Route::group(['middleware'=>['web'],'verified'=>true],function (){


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


});


