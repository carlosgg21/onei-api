<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'codigo'     => $this->CODIGO,
            'nombre'     => $this->DESC,
            'siglas'     => $this->SIGLAS,
            'direccion'     => $this->DIREC,
            'codgio_dpa' => $this->DPA,
            'codigo_nae' => $this->NAE,
            'descripcion_nae' => $this->DESCNAE,
            'descripcion_cnae' => $this->DESCCNAE,
            'codigo_cnae' => $this->CNAE,
            'actividad' => $this->DESCRIP,
            'codigo_forg'=> $this->FORG,
            'codigo_subordinacion'=> $this->DESFO,


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
