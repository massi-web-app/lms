<?php


Route::get('/', function () {
    return view('index');
});


//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Auth::routes(['verify'=>true]);
