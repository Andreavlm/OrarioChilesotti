<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Http\Resources\MateriaResource;
use Illuminate\Database\Eloquent\Builder;

class MateriaController extends Controller
{
    public function index()
    {
        return MateriaResource::collection(Materia::all());
    }

    public function show($id)
    {
        return Materia::find($id);
    }
}