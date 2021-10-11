<?php

namespace App\Http\Controllers;

use App\Models\Organism;
use Illuminate\Http\Request;
use App\Http\Resources\OrganismResource;
use App\Http\Resources\OrganismCollection;

class OrganismController extends Controller
{
    public function index()
    {

        return new OrganismCollection(Organism::paginate(10));
    }

    public function show($code)
    {
        return new OrganismResource(Organism::findOrFail($code));
    }
    public function active()
    {
        return new OrganismCollection(Organism::where('Activo', 'Si')->paginate(10));
    }
}
