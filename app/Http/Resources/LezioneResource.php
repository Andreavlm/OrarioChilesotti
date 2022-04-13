<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LezioneResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'giorno' => GiornoResource::make($this->whenLoaded('giorno')),
            'materia' => MateriaResource::make($this->whenLoaded('materia')),
            'ora' => OraResource::make($this->whenLoaded('ora')),
            'sede' => SedeResource::make($this->whenLoaded('sede')),
            'durata' => $this->durata

        ];
    }
}