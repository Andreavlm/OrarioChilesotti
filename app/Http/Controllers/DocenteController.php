<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Http\Resources\DocenteResource;
use Illuminate\Database\Eloquent\Builder;

class DocenteController extends Controller
{
    public function index()
    {
        return DocenteResource::collection(Docente::all());
    }

    public function show($id)
    {
        return Docente::find($id);
    }


    public function byName($name)
    {
        return Docente::where('nomedocente', $name)->get();
    }

    public function ricercapergiorno($classe,$giorno,$ora){

        return  \DB::select("SELECT *
         FROM classilezioni, lezioni, classi, docenti, docentilezioni
          WHERE classi.nomeclasse=\"".$classe."\" AND lezioni.idgiorno=$giorno AND lezioni.idora=$ora AND classi.idclasse=classilezioni.idclasse AND classilezioni.idlezione=lezioni.idlezione AND lezioni.idlezione=docentilezioni.idlezione AND docentilezioni.iddocente=docenti.iddocente;");
    }

}