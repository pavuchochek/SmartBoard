<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\EvaluationEleveController;
use App\Http\Controllers\EvaluationController;



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

Route::resource('modules', ModuleController::class);
Route::resource('eleves', EleveController::class); // Cela génère toutes les routes nécessaires
Route::resource(name: 'evaluationEleves', controller: EvaluationEleveController::class); // Cela génère toutes les routes nécessaires
Route::resource(name:"evaluations", controller:EvaluationController::class); // Cela génère toutes les routes nécessaires

//Routes custom
Route::get('evaluations/{id}/below10', [EvaluationEleveController::class, 'below10ByEval'])->name('evaluationEleves.below10ByEval');

