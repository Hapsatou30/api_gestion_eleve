<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateEtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Change this if you have specific authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $etudiant = $this->route('etudiant'); // Récupérer l'étudiant de la route

        return [
            'nom' => ["required", "string"],
            'prenom' => ["required", "string"],
            'date_de_naissance' => ["required", "date_format:Y-m-d"],
            'adresse' => ["required", "string"],
            'telephone' => ["required", "string", Rule::unique('etudiants')->ignore($etudiant->id)],
            'email' => ["required", "email", Rule::unique('etudiants')->ignore($etudiant->id)],
            'photo' => ["nullable", "url"],
            'mot_de_passe' => ["required", "string", "min:8"],
            'matricule' => ["required", "string", Rule::unique('etudiants')->ignore($etudiant->id)],
        ];
    }
    
    /**
     * Handle a failed validation attempt.
     */
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            ['success' => false, 'error' => $validator->errors()], 422
        ));
    }
}
