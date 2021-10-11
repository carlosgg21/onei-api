<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
     * table to store teachers records.
     */
    protected $table = 'provinces';

    /**
     * Primary key.
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'color', 'acronym'
    ];

    public function townships()
    {
        return $this->hasMany(Township::class);
    }
}
