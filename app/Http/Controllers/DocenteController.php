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


}