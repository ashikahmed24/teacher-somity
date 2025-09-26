<?php

namespace App\Http\Controllers;

use App\Http\Resources\InstitutionResource;
use App\Models\Upazila;
use Illuminate\Http\Request;
use App\Http\Resources\UpazilaResource;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $upazilas = Upazila::query()->with(['district'])->orderByDesc('created_at')->paginate();
        return UpazilaResource::collection($upazilas);
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
    public function show(Upazila $upazila)
    {
        return UpazilaResource::make($upazila->load('district'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upazila $upazila)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upazila $upazila)
    {
        //
    }


    public function dropdown()
    {
        $upazilas = Upazila::query()->orderByDesc('created_at')->get();
        return UpazilaResource::collection($upazilas);
    }

    public function institutions(Upazila $upazila)
    {
        $upazila->load('institutions');

        return InstitutionResource::collection($upazila->institutions);
    }
}
