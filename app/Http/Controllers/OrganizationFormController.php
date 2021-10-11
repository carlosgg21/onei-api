<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrganizationForm;
use App\Http\Resources\OrganizationFormResource;
use App\Http\Resources\OrganizationFormCollection;



class OrganizationFormController extends Controller
{
    public function index()
    {
        return new OrganizationFormCollection(OrganizationForm::all());
    }

    public function show($code)
    {
        return new OrganizationFormResource(OrganizationForm::findOrFail($code));
    }
}
