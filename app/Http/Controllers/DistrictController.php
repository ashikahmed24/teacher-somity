<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\UpazilaResource;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::query()->with(['division'])->orderByDesc('created_at')->paginate();
        return DistrictResource::collection($districts);
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
    public function show(District $district)
    {
        return DistrictResource::make($district->load('division'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, District $district)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        //
    }

    public function dropdown()
    {
        $districts = District::query()->orderByDesc('created_at')->get();
        return DistrictResource::collection($districts);
    }

    public function upazilas(District $district)
    {
        $district->load('upazilas.district');

        return UpazilaResource::collection($district->upazilas);
    }
}
