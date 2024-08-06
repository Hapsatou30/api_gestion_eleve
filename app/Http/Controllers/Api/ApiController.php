<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function login(Request $request){

        // Validation
        $request->validate([
            "email" => "required|email|string",
            "password" => "required|string",
        ]);

        $token = auth()->attempt([
            "email" => $request->email,
            "password" => $request->password
        ]);

        if(!$token){

            return response()->json([
                "status" => false,
                "message" => "Information de connexion incorrectes"
            ]);
        }

        return response()->json([
            "access_token" => $token,
            "token_type" => "bearer",
            "user" => auth()->user(), 
             "expires_in" => env ("JwT_TTL") * 30  . 'seconds'
        ]);

    }

    public function logout(){
        auth()->logout();
        return response()->json([
            "message" => "Déconnexion réussie"
        ]);
    }

    public function refresh() {
        $token = auth()->refresh();
        return response()->json([
            "access_token" => $token,
            "token_type" => "bearer",
            "user" => auth()->user(), 
            "expires_in" => env ("JWT_TTL") * 30 .'seconds'
        ]);
    }

}
