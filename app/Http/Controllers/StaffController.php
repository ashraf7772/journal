<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')->get();
        return view('staffDashboard', compact('students'));
    }

    public function viewStudent($id)
    {
        $student = User::findOrFail($id);
        $reflections = DB::table('reflection_summaries')->where('user_id', $id)->get();
        return view('viewStudentReflections', compact('student', 'reflections'));
    }
}
