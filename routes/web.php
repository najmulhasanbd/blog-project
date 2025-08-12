<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PrivacyController;
use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');

Route::get('blogs',[BlogController::class,'index'])->name('blogs.index');

Route::get('contact-us',[ContactController::class,'index'])->name('contact.index');

Route::get('privacy-policy',[PrivacyController::class,'index'])->name('privacy.index');
Route::get('terms-condition',[TermsController::class,'index'])->name('terms.index');
