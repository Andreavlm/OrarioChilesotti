<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Http\Resources\ClasseResource;
use Illuminate\Database\Eloquent\Builder;

class ClasseController extends Controller
{
    public function index()
    {
        return ClasseResource::collection(Classe::all());
    }

    public function show($id)
    {
        return Classe::find($id);
    }
}