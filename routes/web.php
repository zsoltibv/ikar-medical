<?php

use App\Mail\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ScraperController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/en');
Route::redirect('/doctors', '/en/doctors');

Route::group(['prefix' => '{language}'], function (){

    Route::get('/', function () {
        return view('master');
    })->name('home');

    Route::get('/doctors', [ScraperController::class, 'scraper'])->name('doctors');
});

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
