<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UnionResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'codigo' => $this->CodU,
            'nombre' => $this->DESCU,
            'siglas' => $this->Siglas,
            'estado' => $this->Activo,


        ];
    }
    public function with($request)
    {
        return [
            'status' => "success",
            'fecha_actualizacion' => "Abril 2020"
        ];
    }
}
