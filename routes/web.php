<?php

use App\Http\Controllers\Frontend\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});


Route::get('blogs',[BlogController::class,'index'])->name('blogs.index');
