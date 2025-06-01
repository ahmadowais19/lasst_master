<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservationform;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // عدد الحجوزات لكل يوم في آخر أسبوع
        $dailyReservations = Reservationform::selectRaw('DATE(res_time) as date, COUNT(*) as count')
            ->where('res_time', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // أكثر الأوقات حجزاً
        $popularTimes = Reservationform::selectRaw('TIME(res_time) as time, COUNT(*) as count')
            ->groupBy('time')
            ->orderByDesc('count')
            ->limit(5)
            ->get();

        // إحصائية الإلغاءات خلال آخر 7 أيام
        $cancelTrends = Reservationform::selectRaw('DATE(res_time) as date, COUNT(*) as count')
            ->where('status', 'cancelled')
            ->where('res_time', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('layouts.dashboardd', compact('dailyReservations', 'popularTimes', 'cancelTrends'));
    }
}
