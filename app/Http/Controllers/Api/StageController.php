<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:25', 'unique:stages,title'],
            'description' => ['required', 'string'],
            'day_id' => ['required']
        ]);

        $stage = Stage::create($validatedData);

        return response()->json([
            'results' => $stage
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stage $stage)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:25'],
            'description' => ['required', 'string'],
        ]);

        $stage->update($validatedData);

        return response()->json([
            'results' => $stage
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stage $stage)
    {
        $stage->delete();
    }
}
