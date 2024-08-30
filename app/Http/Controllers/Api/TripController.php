<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::where('user_id', Auth::id())->get();
        return response()->json([
            'results' => $trips
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['user_id'] = Auth::id();

        $trip = Trip::create($data);

        return response()->json([
            'results' => $trip
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $trip = Trip::with('days.stages')->findOrFail($id);
        return response()->json([
            'results' => $trip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $data = $request->all();

        $trip->update($data);

        return response()->json([
            'results' => $trip
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
    }
}
