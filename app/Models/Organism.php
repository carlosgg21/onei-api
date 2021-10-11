<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organism extends Model
{
    /**
     * table to store teachers records.
     */
    protected $table = 'c_Orga_C';

    /**
     * Primary key.
     */
    protected $primaryKey = 'Cod';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'Cod'  => 'string',

    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Cod', 'Nomb', 'corto', 'Activo'
    ];
}
