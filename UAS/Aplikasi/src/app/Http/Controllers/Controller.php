<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HydrationLog;
use Illuminate\Support\Facades\Auth;

class HydrationController extends Controller
{
    public function index()
    {
        $logs = HydrationLog::where('user_id', Auth::id())->get();
        return view('hydration.index', compact('logs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer|min:1',
        ]);

        HydrationLog::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount,
            'date' => now()->format('Y-m-d'),
        ]);

        return redirect()->back()->with('success', 'Catatan hidrasi ditambahkan!');
    }
}

