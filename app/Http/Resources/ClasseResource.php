<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClasseResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nomeClasse' => $this->nomeclasse
        ];
    }
}