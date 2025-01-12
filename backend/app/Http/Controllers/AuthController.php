<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return response()->json([
                    'message' => 'Connexion réussie',
                    'redirect' => '/tableaudebord/admin'
                ], 200);
            }

            return response()->json(['message' => 'Connexion réussie'], 200);
        }

        return response()->json(['message' => 'Identifiants invalides'], 401);
    }
}