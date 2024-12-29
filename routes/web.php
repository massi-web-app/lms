<?php


Route::get('/', function () {
    return view('index');
});


Route::get('/test',function(){


    return new \Mass\User\Mail\VerifyCodeMail(121212);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

