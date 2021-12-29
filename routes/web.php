<?php

use Illuminate\Support\Facades\Route;
use App\Models\TemplateCategories;
use App\Models\ContractTemplates;

use App\Http\Controllers\ContractTemplatesController;

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
    return view('welcome');
});

Route::get('/categories', function () {
    return TemplateCategories::all();
});

Route::get('/contracts', function () {
    return ContractTemplates::all();
});
Route::get('/contracts/{slug}', [
    ContractTemplatesController::class,
    'contract',
])->name('homepage');
