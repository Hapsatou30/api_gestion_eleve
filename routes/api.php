<?php

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('etudiants', EtudiantController::class);
Route::post('etudiants/{id}/restore', [EtudiantController::class, "restore"]);
Route::delete('etudiants/{id}/force', [EtudiantController::class, "forceDelete"]);
Route::apiResource('evaluations',EvaluationController::class);
