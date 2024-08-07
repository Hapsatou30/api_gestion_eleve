<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateEvaluationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
  
    public function rules(): array
    {
        return [
            'etudiant_id' => ['required', 'exists:etudiants,id'],
            'matiere_id' => ['required', 'exists:matieres,id'],
            'date' => ['required', 'date', 'after:today'],
            'valeur' => ['required', 'numeric', 'between:0,20.00'],
        ];
    }

    /**
     * Gérer les erreurs de validation.
     */
    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(response()->json(
            ['success' => false, 'error' => $validator->errors()], 422
        ));
    }
}
