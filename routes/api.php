<?php

use App\Http\Controllers\EtudiantController;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('etudiants', EtudiantController::class);
Route::post('etudiants/{id}/restore', [EtudiantController::class, "restore"]);
