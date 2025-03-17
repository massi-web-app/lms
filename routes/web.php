<?php


use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('index');
});


Route::get('/test', function () {
    return new \Mass\User\Mail\VerifyCodeMail(121212);
});

Route::get('/hello', [testController::class, 'Test']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

