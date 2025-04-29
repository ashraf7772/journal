<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReflectionSubmissionController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'experience' => 'required|string',
            'observation' => 'required|string',
            'conceptualisation' => 'required|string',
            'experimentation' => 'required|string',
        ]);

        DB::table('reflection_summaries')->insert([
            'user_id' => auth()->id(),
            'experience' => $request->experience,
            'observation' => $request->observation,
            'conceptualisation' => $request->conceptualisation,
            'experimentation' => $request->experimentation,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('student.dashboard')->with('success', 'Reflection submitted successfully!');
    }
}
