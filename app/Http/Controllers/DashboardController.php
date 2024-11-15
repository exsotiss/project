<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\PatientExpense;

class DashboardController extends Controller
{
    public function index()
    {
        $expenses = Patient::with('patient')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('dashboard', compact('expenses'));
    }
}
