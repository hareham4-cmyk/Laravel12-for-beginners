<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkTimeRequest;
use App\Http\Resources\WorkTimeResource;
use App\Models\WorkTime;
use Illuminate\Http\Request;

class WorkTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $work_times= WorkTime::all();
        return WorkTimeResource::collection($work_times->load('stations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkTimeRequest $request)
    {
        $work_time = WorkTime::create($request->validated());
        return WorkTimeResource::make($work_time);
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkTime $workTime)
    {
        return WorkTimeResource::make($workTime->load('stations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkTimeRequest $request, WorkTime $workTime)
    {
        $workTime->WorkTime::update($request->validated());
        return WorkTimeResource::collection($workTime);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkTime $workTime)
    {
        $workTime->delete();
        return response()->noContent();
    }
}
