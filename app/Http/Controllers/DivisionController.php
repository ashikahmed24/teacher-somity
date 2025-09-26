<?php

namespace App\Http\Controllers;

use App\Http\Resources\DistrictResource;
use App\Http\Resources\DivisionResource;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::query()->orderByDesc('created_at')->paginate();
        return DivisionResource::collection($divisions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Division $division)
    {
        return DivisionResource::make($division);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        //
    }


    public function dropdown()
    {
        $divisions = Division::query()->orderByDesc('created_at')->get();
        return DivisionResource::collection($divisions);
    }

    public function districts(Division $division)
    {
        $division->load('districts');

        return DistrictResource::collection($division->districts);
    }
}
