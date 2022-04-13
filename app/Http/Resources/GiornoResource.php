<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GiornoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nomeGiorno' => $this->nomegiorno
        ];
    }
}