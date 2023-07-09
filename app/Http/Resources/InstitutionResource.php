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
            'direccion'     => $this->DIRECC,
            'codgio_dpa' => $this->DPA,
            'codigo_nae' => $this->NAE,
            'descripcion_cn' => $this->DESCN,
            'codigo_cnae' => $this->DESCN,
            'actividad' => $this->DESCRIP,
            'codigo_forg'=> $this->FORG,
            'codigo_desfo'=> $this->DESFO,


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
