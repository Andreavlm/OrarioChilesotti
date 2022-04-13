<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MateriaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nomeMateria' => $this->nomemateria
        ];
    }
}