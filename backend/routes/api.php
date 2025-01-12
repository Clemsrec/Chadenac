<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes API
|--------------------------------------------------------------------------
|
| Ici, vous pouvez enregistrer les routes API pour votre application. Ces
| routes sont chargées par le RouteServiceProvider au sein d'un groupe qui
| est assigné au groupe de middleware "api". Profitez de la construction de votre API !
|
*/

Route::middleware('auth:sanctum')->get('/utilisateur', function (Request $request) {
    return $request->user();
});