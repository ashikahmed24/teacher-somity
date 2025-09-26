<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;
use App\Http\Requests\InstitutionRequest;
use App\Http\Resources\InstitutionResource;
use Symfony\Component\HttpFoundation\Response;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutions = Institution::query()->orderByDesc('created_at')->paginate();
        return InstitutionResource::collection($institutions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstitutionRequest $request)
    {

        Institution::create([
            'upazila_id' => $request->upazila_id,
            'institution_type_id' => $request->institution_type_id,
            'name' => $request->name,
            'bn_name' => $request->bn_name,
            'eiin' => $request->eiin,
            'address' => $request->address,
            'lat' => $request->lat,
            'lon' => $request->lon,
            'established_year' => $request->established_year,
            'website' => $request->website,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Institution Added Successfully.',
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Institution $institution)
    {
        return InstitutionResource::make($institution->load('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Institution $institution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institution $institution)
    {
        //
    }


    public function dropdown()
    {
        $institutions = Institution::query()->orderByDesc('created_at')->get();
        return InstitutionResource::collection($institutions);
    }
}
