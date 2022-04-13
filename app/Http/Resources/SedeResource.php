<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SedeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nomeSede' => $this->nomesede
        ];
    }
}