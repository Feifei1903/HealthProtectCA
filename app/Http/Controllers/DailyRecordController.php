<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDailyRecordRequest;
use App\Http\Requests\UpdateDailyRecordRequest;
use Illuminate\Http\Request;
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
        return view('daily_records.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'amount_smoke' => 'required',
            'daily_spent' => 'required'
        ]);

        DailyRecord::create([
            'date' => $request->date,
            'amount_smoke' => $request->amount_smoke,
            'daily_spent' => $request->daily_spent,
        ]);
        return to_route('dailyRecord.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DailyRecord $dailyRecord)
    {
        return view('daily_records.show')->with('dailyRecord', $dailyRecord);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DailyRecord $dailyRecord)
    {
        return view('daily_records.edit')->with('dailyRecord', $dailyRecord);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DailyRecord $dailyRecord)
    {
        $request->validate([
            'date' => 'required',
            'amount_smoke' => 'required',
            'daily_spent' => 'required'
        ]);

        $dailyRecord->update([
            'date' => $request->date,
            'amount_smoke' => $request->amount_smoke,
            'daily_spent' => $request->daily_spent,
        ]);
        return to_route('daily_records.show', $dailyRecord)->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DailyRecord $dailyRecord)
    {
        $dailyRecord->delete();
        return to_route('daily_records.show')->with('success', 'Record deleted successfully');
    }
}
