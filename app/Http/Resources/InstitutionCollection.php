<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class InstitutionCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection
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
