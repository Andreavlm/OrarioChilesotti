<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use App\Http\Resources\SedeResource;
use Illuminate\Database\Eloquent\Builder;

class SedeController extends Controller
{
    public function index()
    {
        return SedeResource::collection(Sede::all());
    }

    public function show($id)
    {
        return new SedeResource(Sede::find($id));
    }
}