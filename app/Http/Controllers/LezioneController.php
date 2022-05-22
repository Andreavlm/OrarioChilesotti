<?php

namespace App\Http\Controllers;

use App\Models\Lezione;
use App\Http\Resources\LezioneResource;
use Illuminate\Database\Eloquent\Builder;

class LezioneController extends Controller
{
    public function index()
    {
        return LezioneResource::collection(Lezione::with('giorno')->get(), Lezione::with('materia')->get(), Lezione::with('ora')->get(), Lezione::with('sede')->get());
        //return LezioneResource::collection(Lezione::all());
    }

    public function show($id)
    {
        return Lezione::find($id);
    }


 public function perDocente($nome){
     return  \DB::select("SELECT *
     FROM (((((lezioni NATURAL JOIN ore) NATURAL JOIN giorni) NATURAL JOIN docentilezioni) NATURAL JOIN docenti) NATURAL JOIN classilezioni) NATURAL JOIN classi
     WHERE docenti.nomedocente like\"%".$nome."%\" ;");
 }


 

   public function perAula($nome){
    return  \DB::select("SELECT * FROM (((((((lezioni NATURAL JOIN ore) NATURAL JOIN giorni) NATURAL JOIN docentilezioni) NATURAL JOIN docenti) NATURAL JOIN classilezioni) NATURAL JOIN classi) NATURAL JOIN sedi) NATURAL JOIN aulelezioni NATURAL JOIN aule 
    WHERE aule.nomeaula=\"".$nome."\";");
   }

   public function perClasse($nome){
    return  \DB::select("SELECT *
    FROM ((((classi NATURAL JOIN classilezioni) NATURAL JOIN lezioni) NATURAL JOIN ore) NATURAL JOIN giorni) NATURAL JOIN sedi
    WHERE classi.nomeclasse=\"".$nome."\" ;");
   }

}