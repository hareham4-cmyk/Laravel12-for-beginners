<?php

namespace App\Http\Controllers;

use App\Models\WashingType;
use Illuminate\Http\Request;
use App\Http\Resources\WashingTypeResource;
use App\Http\Requests\WashingTypeRequest;

class WashingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $washing_types=WashingType::all();
         return WashingTypeResource::collection($washing_types->load('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(WashingTypeRequest $request)
    {
        $washing_type = WashingType::create($request->validated());
        return WashingTypeResource::make($washing_type);
    }

    /**
     * Display the specified resource.
     */
    public function show(WashingType $washingType)
    {
        return WashingTypeResource::make($washingType->load('bookings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WashingTypeRequest $request, WashingType $washingType)
    {
        $washingType->WashingType::update($request->validated());
        return WashingTypeResource::collection($washingType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WashingType $washingType)
    {
        $washingType->delete();
        return response()->noContent();
    }
}
