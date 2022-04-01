<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\Lezione;
use App\Models\Aula;
use App\Models\Docente;
use App\Models\Materia;
use App\Models\Sede;
use App\Models\Giorno;
use App\Models\Classe;
use App\Models\Ora;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//Tabelle semplici

$router->get('/', function () use ($router) {
    return $router->app->version();
});

    
$router->get('/lezioni', function() {
    return response()->json(Lezione::all());
   });

$router->get('/aule', function() {
    return response()->json(Aula::all());
   });

$router->get('/docenti', function() {
    return response()->json(Docente::all());
   });

$router->get('/materie', function() {
    return response()->json(Materia::all());
   });

$router->get('/sedi', function() {
    return response()->json(Sede::all());
   });

$router->get('/giorni', function() {
    return response()->json(Giorno::all());
   });

$router->get('/classi', function() {
    return response()->json(Classe::all());
   });

$router->get('/ore', function() {
    return response()->json(Ora::all());
   });