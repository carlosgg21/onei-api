<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganizationForm extends Model
{
    /**
     * table to store teachers records.
     */
    protected $table = 'C_for_org';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'COD' => 'string'
    ];
    /**
     * Primary key.
     */
    protected $primaryKey = 'COD';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'COD', 'DESFO'
    ];
}
