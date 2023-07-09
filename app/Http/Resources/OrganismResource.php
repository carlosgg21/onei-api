<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrganismResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'codigo' => $this->Cod,
            'nombre' => $this->Nomb,
            'siglas' => $this->corto,
            'estado' => $this->Activo,


        ];
    }
    public function with($request)
    {
        return [
            'status' => "success",
            'fecha_actualizacion' => "Mayo 2023"

        ];
    }
}
