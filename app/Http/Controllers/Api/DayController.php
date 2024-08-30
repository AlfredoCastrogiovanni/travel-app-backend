<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:25', 'unique:days,title'],
            'description' => ['required', 'string'],
            'trip_id' => ['required']
        ]);

        $day = Day::create($validatedData);

        return response()->json([
            'results' => $day
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Day $day)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:25'],
            'description' => ['required', 'string'],
        ]);

        $day->update($validatedData);

        return response()->json([
            'results' => $day
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Day $day)
    {
        $day->delete();
    }
}
