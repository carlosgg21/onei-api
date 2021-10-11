<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Union;
use App\Http\Resources\UnionResource;
use App\Http\Resources\UnionCollection;

class UnionController extends Controller
{
    public function index()
    {
        return new UnionCollection(Union::paginate(10));
    }

    public function show($code)
    {
        return new UnionResource(Union::findOrFail($code));
    }
    public function active()
    {
        return new UnionCollection(Union::where('Activo', 'Si')->paginate(10));
    }
}
