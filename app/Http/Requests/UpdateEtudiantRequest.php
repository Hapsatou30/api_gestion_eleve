<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateEtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    { $etudiantId = $this->route('etudiant'); // Récupère l'ID de l'étudiant à partir de la route

        return [
            'nom' => ["required", "string"],
            'prenom' => ["required", "string"],
            'date_naissance' => ["required", "date"],
            'adresse' => ["required", "string"],
            'telephone' => ["required", "string", "unique:etudiants,telephone," . $etudiantId],
            'email' => ["required", "email", "unique:etudiants,email," . $etudiantId],
            'photo' => ["nullable", "url"],
            'mot_de_passe' => ["required", "string", "min:8"],
            'matricule' => ["required", "string", "unique:etudiants,matricule," . $etudiantId],
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json(
            ['success'=>false, 'error'=>$validator->errors()],422
        ));
    }
}
