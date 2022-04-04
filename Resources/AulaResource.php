<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AulaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "nomeaula" => $this->nomeaula
        ];
    }
}