<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractController;

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

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/dpa', function () {
    return view('frontend.dpa');
})->name('dpa');

Route::get('/electronic-signature', function () {
    return view('frontend.electronic-signature');
})->name('electronic-signature');

Route::get('/document-generation', function () {
    return view('frontend.document-generation');
})->name('document-generation');

Route::get('/signature-creator', function () {
    return view('frontend.signature-creator.index');
})->name('signature-creator');

Route::get('/signature-creator/draw', function () {
    return view('frontend.signature-creator.draw');
})->name('signature-creator-draw');

Route::get('/signature-creator/type', function () {
    return view('frontend.signature-creator.type');
})->name('signature-creator-type');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/contracts', function () {
    return view('contracts');
})->name('contracts');

Route::group(['prefix' => '/'], function () {
    Route::get('/{contract}', [ContractController::class, 'contract'])->name(
        'contracts.slug'
    );

    Route::get('/{contract}/{slug?}', [
        ContractController::class,
        'template',
    ])->name('tcontracts.slug');
});
