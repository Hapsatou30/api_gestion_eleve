<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return response()->json(['liste des evaluations', $evaluations]);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvaluationRequest $request)
    {
        $evaluation = Evaluation::create($request->all());
        return response()->json(['évaluation créée', $evaluation]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Evaluation $evaluation)
    {
        return response()->json(['évaluation', $evaluation]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
        $evaluation->update($request->all());
        return response()->json(['message' => 'Evaluation modifiée', 'evaluation' => $evaluation]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return response()->json(['message' => 'Evaluation supprimée']);
    }

   
}
