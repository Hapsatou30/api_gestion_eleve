<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreEtudiantRequest extends FormRequest
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
    {
        return [
            'nom' => ["required", "string"],
            'prenom' => ["required", "string"],
            'date_naissance' => ["required", "date"],
            'adresse' => ["required", "string"],
            'telephone' => ["required", "string", "unique:etudiants,telephone"],
            'email' => ["required", "email", "unique:etudiants,email"],
            'photo' => ["nullable", "url"],
            'mot_de_passe' => ["required", "string", "min:8"],
            'matricule' => ["required", "string", "unique:etudiants,matricule"],
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json(
            ['success'=>false, 'error'=>$validator->errors()],422
        ));
    }
}
