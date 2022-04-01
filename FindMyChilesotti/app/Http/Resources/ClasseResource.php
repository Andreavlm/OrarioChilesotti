<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClasseResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "livello" => $this-> livello,
            "nome" => $this->nome,
            "sesso" => $this-> sesso,
        ];
    }
}