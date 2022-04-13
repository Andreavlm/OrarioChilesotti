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
        return new DocenteResource(Docente::find($id));
    }
}