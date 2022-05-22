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





//per le ore
//$router->get('/ore', ['uses' => 'OraController@index']);


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

    //per le aule
$router->get('/aule/{id}', ['uses' => 'AulaController@show']);

//$router->get('/aule/{id}',
//function ($id)
//{
// return Aula::find($id);
//});





$router->get('/aula/{id}', ['uses' => 'AulaController@show']);
$router->get('/docente/{id}', ['uses' => 'DocenteController@show']);
$router->get('/lezione/{id}', ['uses' => 'LezioneController@show']);
$router->get('/classe/{id}', ['uses' => 'ClasseController@show']);
$router->get('/sede/{id}', ['uses' => 'SedeController@show']);

$router->get('/docenti/{id}', ['uses' => 'DocenteController@show']);
$router->get('/lezioni/{id}', ['uses' => 'LezioneController@show']);
$router->get('/classi/{id}', ['uses' => 'ClasseController@show']);
$router->get('/sedi/{id}', ['uses' => 'SedeController@show']);



$router->get('/docente/nome/{name}', ['uses' => 'DocenteController@byName']);
$router->get('/aula/nome/{name}', ['uses' => 'AulaController@byName']);
$router->get('/classe/nome/{name}', ['uses' => 'ClasseController@byName']);

$router->get('/perDocente/{nome}', ['uses' => 'LezioneController@perDocente']);

$router->get('/perAula/{nome}', ['uses' => 'LezioneController@perAula']);
$router->get('/perClasse/{nome}', ['uses' => 'LezioneController@perClasse']);

$router->get('/aulaLibera', ['uses' => 'AulaController@aulaLibera']);
