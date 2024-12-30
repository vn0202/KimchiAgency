<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get("/",[PageController::class,'index'])
    ->name('home');
Route::get('/works/{cat?}', [PageController::class, 'worksPage'])->name('works');

Route::get('/cat/test',[PageController::class, 'detail'])->name("blog.detail");
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/careers', function () {
    return view('pages.careers');

})->name('careers');

Route::get('/careers/{page}',[PageController::class,'careerPages'])->name('careers.page');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', [PageController::class, 'sendMessage'])->name('send_message');

