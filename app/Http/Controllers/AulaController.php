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
        return new AulaResource(Aula::find($id));
    }
}