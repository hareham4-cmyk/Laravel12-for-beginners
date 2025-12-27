<?php

namespace App\Http\Controllers;

use App\Http\Requests\StationRequest;
use App\Models\Station;
use Illuminate\Http\Request;
use App\Http\Resources\StationResource;
use GuzzleHttp\Promise\Create;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::all();
        return StationResource::Collection($stations->load('children'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StationRequest $request)
    {
        $station = Station::create($request->validated());
        return StationResource::make($station);

    }

    /**
     * Display the specified resource.
     */
    public function show(Station $station)
    {
        return StationResource::make($station->load('children'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StationRequest $request, Station $station)
    {
        $station->update($request->validated());
        return StationResource::make($station);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Station $station)
    {
        $station->delete();
        return response()->noContent();
    }
}
