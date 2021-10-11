<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Township extends Model
{
    use HasFactory;
    protected $fillable = ['name','province_id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }


}
