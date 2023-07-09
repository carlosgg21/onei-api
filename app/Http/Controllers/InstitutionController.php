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
        // return new InstitutionCollection(Institution::paginate(10));
        return new InstitutionCollection(Institution::all());
    }

    public function show($code)
    {
	
        return new InstitutionResource(Institution::findOrFail($code));
    }
    public function search(Request $request)
    {
        // return $request;

        // $query = Author::query();
        return $query = Institution::query();
        $query->when(request('filter_by') == 'likes', function ($q) {
            return $q->where('likes', '>', request('likes_amount', 0));
        });
        $query->when(request('filter_by') == 'date', function ($q) {
            return $q->orderBy('created_at', request('ordering_rule', 'desc'));
        });
    }
}
