<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Resources\ProvinceResource;
use App\Http\Resources\ProvinceCollection;

class ProvinceController extends Controller
{

    public function index()
    {
        return new ProvinceCollection(Province::paginate(10));
    }

    public function show($code)
    {
        return new ProvinceResource(Province::findOrFail($code));
    }
}
