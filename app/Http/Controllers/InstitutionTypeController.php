<?php

namespace App\Http\Controllers;

use App\Http\Resources\InstitutionTypeResource;
use App\Models\InstitutionType;
use Illuminate\Http\Request;

class InstitutionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = InstitutionType::query()->orderByDesc('created_at')->paginate();
        return InstitutionTypeResource::collection($types);
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
    public function show(InstitutionType $institutionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstitutionType $institutionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstitutionType $institutionType)
    {
        //
    }

    public function dropdown()
    {
        $types = InstitutionType::query()->orderByDesc('created_at')->get();
        return InstitutionTypeResource::collection($types);
    }
}
