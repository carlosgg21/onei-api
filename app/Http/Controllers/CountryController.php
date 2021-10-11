<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CountryCollection;


class CountryController extends Controller
{
    public function index()
    {
        return new CountryCollection(Country::paginate(10));
    }

    public function show($code)
    {
        return new CountryResource(Country::findOrFail($code));
    }
    public function countries($regionId)
    {
        return new CountryCollection(Country::where('Cod_Region',$regionId)->paginate(10));
    }
}
