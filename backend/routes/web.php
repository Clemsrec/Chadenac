<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Routes Web
|--------------------------------------------------------------------------
|
| Ici, vous pouvez enregistrer les routes web pour votre application. Ces
| routes sont chargées par le RouteServiceProvider au sein d'un groupe qui
| contient le groupe de middleware "web". Créez quelque chose de génial !
|
*/

Route::get('/', function () {
    return view('bienvenue');
});

Route::post('/connexion', [AuthController::class, 'login']);

Route::get('/tableaudebord/admin', function () {
    return view('admin.dashboard');
})->middleware('auth');
