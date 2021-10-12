<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    public function toArray($request)
    {

        return [
            'codigo'        => $this->Codigo_M49,
            'nombre_pais'   => $this->Pais_o_Area,
            'region'        => $this->Nombre_Region,
            'codigo_region' => $this->Cod_Region,
            'codigo_iso'    => $this->Codigo_ISO,


        ];
    }
    public function with($request)
    {
        return [
            'status' => "success",
            'fecha_actualizacion' => "Julio 2019"
        ];
    }
}
