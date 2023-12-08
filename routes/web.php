<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

// Page d'accueil
Route::get('/', function () {
    return view('welcome'); // Assurez-vous que 'welcome' est le nom correct de votre vue d'accueil
});

// Routes pour les apprenants
Route::get('/apprenant', [ApprenantController::class, 'liste_apprenant']);
Route::get('/update-apprenant/{id}', [ApprenantController::class, 'update_apprenant']);
Route::get('/ajouter', [ApprenantController::class, 'ajouter_apprenant']);
Route::post('/ajouter/traitement', [ApprenantController::class, 'ajouter_apprenant_traitement']);

// Routes pour les formations
Route::get('/formation', [FormationController::class, 'liste_formation']);
Route::get('/ajouter-formation', [FormationController::class, 'ajouter_formation']);
Route::get('/update-formation/{id}', [FormationController::class, 'update_formation']);
Route::post('/ajouter-formation', [FormationController::class, 'ajouter_formation_traitement']);

