<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metric;

class DashboardController extends Controller
{
    public function index()
    {
        $metrics = $this->fetchData();
        return view('dashboard', compact('metrics'));
    }

    public function data(Request $request)
    {
        $metrics = $this->fetchData();
        return response()->json([
            'data' => $metrics,
        ]);
    }

    public function chart()
    {
        $metrics = $this->fetchData();

        $labels = $metrics->pluck('platform');
        $followersData = $metrics->pluck('followers');
        $engagementRateData = $metrics->pluck('engagement_rate');

        return view('chart', compact('labels', 'followersData', 'engagementRateData'));
    }

    private function fetchData()
    {
        return Metric::all();
    }
}
