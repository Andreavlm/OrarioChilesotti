<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Http\Resources\AulaResource;
use Illuminate\Database\Eloquent\Builder;

class AulaController extends Controller
{
    public function index()
    {
        return AulaResource::collection(Aula::all());
    }

    public function show($id)
    {
        return Aula::find($id);
    }

    public function byName($name)
    {
        return Aula::where('nomeaula', $name)->get();
    }
  
    public function auleLibere(){
        return  \DB::select("SELECT aule.nomeaula 
        FROM (aule LEFT JOIN aulelezioni on aule.idaula=aulelezioni.idaula) LEFT JOIN lezioni ON aulelezioni.idlezione=lezioni.idlezione
        WHERE aulelezioni.idlezione IS NULL
        ORDER BY aulelezioni.idaula, aulelezioni.idlezione, lezioni.idgiorno");
       }

    
}