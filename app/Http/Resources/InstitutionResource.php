<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'codigo'     => $this->COD,
            'nombre'     => $this->DESCC,
            'siglas'     => $this->SIGLAS,
            'codgio_dpa' => $this->DPA,
            'codigo_nae' => $this->NAE,
            'codigo_forg'=> $this->FORG,


        ];
    }
    public function with($request)
    {
        return [
            'status' => "success",
            'fecha_actualizacion' => "Agosto 2021"
        ];
    }
}
