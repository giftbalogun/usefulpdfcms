<?php

use Illuminate\Support\Facades\Route;
use App\Models\Template;
use App\Models\Contract;

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
});

Route::get('/contracts', function () {
    return view('contracts');
})->name('contracts');

Route::get('/categories', function () {
    return Template::all();
});

Route::get('/contr', function () {
    return Contract::all();
});

Route::group(['prefix' => '/contracts'], function () {
    Route::get('/{contract}', [ContractController::class, 'contract'])->name(
        'contracts.slug'
    );

    Route::get('/s/{template}', [ContractController::class, 'tcontract'])->name(
        'tcontracts.slug'
    );
});
