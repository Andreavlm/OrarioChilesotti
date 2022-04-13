<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OraResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'oraInizio' => $this->orainizio,
            'oraFine' => $this->orafine,
            'giorno' => GiornoResource::make($this->whenLoaded('giorno')),
        ];
    }
}