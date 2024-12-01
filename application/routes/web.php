<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\EvaluationEleveController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;



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
})->middleware('auth');

Route::middleware('can:access-professor-pages')->group(function () {
    Route::resource('modules', ModuleController::class)->middleware('auth');
    Route::resource('eleves', EleveController::class)->middleware('auth'); // Cela génère toutes les routes nécessaires
    Route::resource(name: 'evaluationEleves', controller: EvaluationEleveController::class)->middleware('auth');// Cela génère toutes les routes nécessaires
    Route::resource(name:"evaluations", controller:EvaluationController::class)->middleware('auth'); // Cela génère toutes les routes nécessaires
});
Route::resource(name:'user', controller:UserController::class)->middleware('auth'); // Cela génère toutes les routes nécessaires
//Routes custom
Route::get('evaluations/{id}/below10', [EvaluationEleveController::class, 'below10ByEval'])->name('evaluationEleves.below10ByEval')->middleware('auth');
Route::post("/loginAttempt", [LoginController::class, 'authenticate'])->name('loginAttempt');


Route::get('login', function () {
    return view('login');
})->name('login');

Route::get("register", function () {
    return view('register');
});
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
