<?php

namespace App\Http\Controllers;

use App\Models\Giorno;
use App\Http\Resources\GiornoResource;
use Illuminate\Database\Eloquent\Builder;

class GiornoController extends Controller
{
    public function index()
    {
        return GiornoResource::collection(Giorno::all());
    }

    public function show($id)
    {
        return new GiornoResource(Giorno::find($id));
    }
}