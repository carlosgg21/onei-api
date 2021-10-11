<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Http\Resources\InstitutionResource;
use App\Http\Resources\InstitutionCollection;

class InstitutionController extends Controller
{
    public function index()
    {
        return new InstitutionCollection(Institution::paginate(10));
    }

    public function show($code)
    {
        return new InstitutionResource(Institution::findOrFail($code));
    }
}
