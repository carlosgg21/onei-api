<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    /**
     * table to store teachers records.
     */
    protected $table = 'DUINE';

    /**
     * Primary key.
     */
    protected $primaryKey = 'COD';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'COD'  => 'string',

    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'COD', 'DESCC', 'SIGLAS', 'DIRECC', 'DPA', 'NAE', 'FORG'
    ];
}
