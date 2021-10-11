<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    /**
     * table to store teachers records.
     */
    protected $table = 'C_Uniones';

    /**
     * Primary key.
     */
    protected $primaryKey = 'CodU';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'CodU'        => 'string',

    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array  */

    protected $fillable = [
        'CodU', 'DESCU', 'Siglas', 'Activo'
    ];
}
