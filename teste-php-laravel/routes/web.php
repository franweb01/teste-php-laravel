<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', [ImportController::class, 'ImportController']);
Route::post('/import', [ProcessingController::class, 'ProcessingController']);


.../teste-php-laravel/routes/web.php
.../teste-php-laravel/tarefa1.txt
.../teste-php-laravel/resources/views/import.blade.php
.../teste-php-laravel/resources/views/processing.blade.php
.../teste-php-laravel/app/Http/Controllers/ImportController.php
.../teste-php-laravel/app/Http/Controllers/ProcessingController.php