<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerController;
use App\Mail\ContactMailable;

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

Route::get('/', [PrimerController::class, 'home']);
Route::get('/contacto', [PrimerController::class, 'contacto']);
Route::get('/formulario', [MailController::class, 'formulario']);
Route::post('/formulario', [MailController::class, 'envioFormulario']);