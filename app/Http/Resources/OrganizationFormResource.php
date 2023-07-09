<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrganizationFormResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'codigo'             => $this->COD,
            'forma_organizativa' => $this->DESFO,

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
