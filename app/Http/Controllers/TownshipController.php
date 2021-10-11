<?php

namespace App\Http\Controllers;

use App\Models\Township;
use Illuminate\Http\Request;
use App\Http\Resources\TownshipResource;
use App\Http\Resources\TownshipCollection;


class TownshipController extends Controller
{
    public function index()
    {
       return new TownshipCollection(Township::with(['province'])->paginate(10));
    }
    public function show($code)
    {
        return new TownshipResource(Township::findOrFail($code));
    }
    public function township($provinceId)
    {
        return new TownshipCollection(Township::with(['province'])->where('province_id',$provinceId)->get());
    }
}
