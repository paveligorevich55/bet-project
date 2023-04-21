<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Event;
use AshAllenDesign\ShortURL\Models\ShortURL;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(): Response
    {

        $events = Event::all();
        $visitorCount = count($events);
        $uniqueVisitorCount = $events->groupBy('visitor_id')->count();
        $todayEventsCount = Event::whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->count();
        $eventAttributes = Event::pluck('attribute')->unique();
        $mostFrequentAttributes = Event::select('attribute', DB::raw('COUNT(*) as count'))->groupBy('attribute')->orderBy('count', 'DESC')->limit(7)->get();
        $mostFrequentDevices = Event::select('device', DB::raw('COUNT(*) as count'))->groupBy('device')->orderBy('count', 'DESC')->limit(7)->get();

        $clicks = ShortURLVisit::where('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->count();

        $referralFilters = ['google', 'yandex', 'bing', 'yahoo', 'Direct'];

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $dates = [];
        $currentDate = $startOfMonth->copy();

        while ($currentDate->lte($endOfMonth)) {
            $dates[] = $currentDate->copy();
            $currentDate->addDay();
        }

        $directTraffic = Event::select(DB::raw("COUNT(*) as count"), DB::raw("DAY(created_at) as day_num"), 'referer')
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->where('referer' , 'Direct')
            ->groupBy(DB::raw("Day(created_at)"))
            ->pluck('count', 'day_num');

        $referralTraffic = Event::select(DB::raw("COUNT(*) as count"), DB::raw("DAY(created_at) as day_num"), 'referer')
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->whereNotIn('referer' , $referralFilters)
            ->groupBy(DB::raw("Day(created_at)"))
            ->pluck('count', 'day_num');

        $organicTraffic = Event::select(DB::raw("COUNT(*) as count"), DB::raw("DAY(created_at) as day_num"), 'referer')
            ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->whereIn('referer' , ['google', 'yandex', 'bing', 'yahoo'])
            ->groupBy(DB::raw("Day(created_at)"))
            ->pluck('count', 'day_num');


        $datesCollection = collect($dates);
        $labels = $datesCollection->map(function ($date) {
            return $date->day;
        });
        $dataReferral = $datesCollection->map(function ($date) use ($referralTraffic) {
            return isset($referralTraffic[$date->day]) ? $referralTraffic[$date->day] : 0;
        });
        $dataOrganic = $datesCollection->map(function ($date) use ($organicTraffic) {
            return isset($organicTraffic[$date->day]) ? $organicTraffic[$date->day] : 0;
        });
        $dataDirect = $datesCollection->map(function ($date) use ($directTraffic) {
            return isset($directTraffic[$date->day]) ? $directTraffic[$date->day] : 0;
        });

        return response()->view('dashboard', compact([
            'labels',
            'clicks',
            'dataOrganic',
            'dataReferral',
            'dataDirect',
            'todayEventsCount',
            'eventAttributes',
            'visitorCount',
            'uniqueVisitorCount',
            'mostFrequentAttributes',
        ]));
    }

}
