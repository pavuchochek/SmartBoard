<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\EvaluationEleveController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

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

// Page d'accueil accessible seulement pour les utilisateurs authentifiés
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// Routes accessibles seulement pour les professeurs
Route::middleware('can:access-professor-pages')->group(function () {
    Route::resource('modules', ModuleController::class)->middleware('auth');
    
    Route::resource('evaluationEleves', EvaluationEleveController::class)->middleware('auth'); // Routes des évaluations élèves
    Route::resource('evaluations', EvaluationController::class)->middleware('auth'); // Routes des évaluations
});
Route::resource('eleves', EleveController::class)->middleware('auth'); // Routes des élèves (CRUD)
// Routes pour consulter les informations des élèves (accessible à l'élève authentifié)
Route::middleware('auth')->group(function () {
    Route::get('/eleves/{eleve}', [EleveController::class, 'show'])
        ->name('eleves.show');
});

// Routes pour les utilisateurs (professeurs ou autres)
Route::resource('user', UserController::class)->middleware('auth');

// Routes personnalisées (par exemple pour voir les élèves avec des notes inférieures à 10)
Route::get('evaluations/{id}/below10', [EvaluationEleveController::class, 'below10ByEval'])
    ->name('evaluationEleves.below10ByEval')
    ->middleware('auth');

// Authentification et déconnexion
Route::post('/loginAttempt', [LoginController::class, 'authenticate'])->name('loginAttempt');
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('register', function () {
    return view('register');
});
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Envoi de messages
Route::post('message', [MessageController::class, 'sendMessageMail'])->name('send.message.mail');

