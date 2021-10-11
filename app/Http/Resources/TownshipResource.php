<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TownshipResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'codigo'            => $this->id,
            'municipio'         => $this->name,
            'provincia'         => $this->province->name,
            'codigo_provincia'  => $this->province_id,
            'siglas_provincia'  => $this->province->acronym,

        ];
    }
    public function with($request)
    {
        return [
            'status' => "success",
            'fecha_actualizacion' => "Diciembre 2015"
        ];
    }
}
