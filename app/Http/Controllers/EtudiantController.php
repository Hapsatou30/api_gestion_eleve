<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return response()->json(['liste des etudiantds', $etudiants]);
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEtudiantRequest $request)
    {
        $etudiant = Etudiant::create($request->all());
        return response()->json(['etudiant créé', $etudiant]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return response()->json(['etudiant', $etudiant]);

    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEtudiantRequest $request, Etudiant $etudiant)
    {
        $etudiant->update($request->all());
        return response()->json(['message' => 'Étudiant modifié', 'etudiant' => $etudiant]);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return response()->json(['message' => 'Étudiant supprimé']);
    }

    public function restore(Etudiant $etudiant){
        $etudiant->restore();
        return response()->json(['message' => 'Étudiant restauré']);
    }
}
