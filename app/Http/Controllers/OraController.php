<?php

namespace App\Http\Controllers;

use App\Models\Ora;
use App\Http\Resources\OraResource;
use Illuminate\Database\Eloquent\Builder;

class OraController extends Controller
{
    public function index()
    {
        return OraResource::collection(Ora::with('giorno')->get());
        //return OraResource::collection(Ora::all());
    }

    public function show($id)
    {
        return new OraResource(Ora::find($id));
    }
}