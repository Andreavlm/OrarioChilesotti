<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocenteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nomeDocente' => $this->nomedocente
        ];
    }
}