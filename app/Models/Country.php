<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   /**
     * table to store teachers records.
     */
    protected $table = 'Codificador_paises';

    /**
     * Primary key.
     */
    protected $primaryKey = 'Codigo_M49';

      /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'Codigo_M49'        => 'string',
        'Codigo_ISO_alpha3' =>'srtring'
        ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array  */

    protected $fillable = [
         'Cod_Region', 'Nombre_Region','Pais_o_Area','Codigo_M49','Codigo_ISO'
    ];
}
