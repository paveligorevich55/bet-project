<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(): Response
    {

        $visits = DB::table('events')->get();

        $visitors_count = $visits->count();

        $unique_visitor = $visits->unique('visitor_id')->count();

        $today_visits = $visits->whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->count();

        $visits_pages = DB::table('events')
                        ->pluck('attribute')
                        ->unique();

        $visits_page_repeated = DB::table('events')
                                ->select('events.*', DB::raw('COUNT(attribute) as count'))
                                ->groupBy('attribute')
                                ->orderBy('count', 'DESC')
                                ->limit(7)
                                ->get();
        $visits_repeated_device = DB::table('events')
                                ->select('events.*', DB::raw('COUNT(device) as count'))
                                ->groupBy('device')
                                ->orderBy('count', 'DESC')
                                ->limit(7)
                                ->get();

        $organic_referer = "/(google|yandex|bing)/i";
        $direct_referer = 'Direct';
        $referal_referer = !$organic_referer && !$direct_referer;

        $exmp = Event::select(DB::raw("COUNT(*) as count"), DB::raw("DAY(created_at) as day_num"), 'referer')
                ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
                ->where('referer' , $direct_referer)
                ->groupBy(DB::raw("Day(created_at)"))
                ->pluck('count', 'day_num');

        $labels = $exmp->keys();
        $data = $exmp->values();

        return response()->view('dashboard', compact([
            'labels',
            'data',
            'today_visits',
            'visits_pages',
            'visitors_count',
            'unique_visitor',
            'visits_page_repeated',
        ]));
    }
}
