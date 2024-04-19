<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDailyRecordRequest;
use App\Http\Requests\UpdateDailyRecordRequest;
use App\Models\DailyRecord;

class DailyRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dailyRecord = DailyRecord::all();
        return view('daily_records.index', compact('dailyRecord'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDailyRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DailyRecord $dailyRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DailyRecord $dailyRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDailyRecordRequest $request, DailyRecord $dailyRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DailyRecord $dailyRecord)
    {
        //
    }
}
