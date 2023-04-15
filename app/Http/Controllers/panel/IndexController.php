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

        $exmp2 = Event::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"), 'referer')
            ->whereDay('created_at', date('d'))
            ->where('referer' , 'Direct')
            ->groupBy(DB::raw("Day(created_at)"))
            ->pluck('count', 'day_name');

        $labels = $exmp2->keys();
        $data = $exmp2->values();

        $exmp = Event::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"), 'referer')
            ->whereDay('created_at', date('d'))
            ->where('referer' , 'Direct')
            ->groupBy(DB::raw("Day(created_at)"))
            ->pluck('count', 'day_name');


        $visitors_count = $visits->count();

        $unique_visitor = $visits->unique('visitor_id')->count();



//        $visit_social = $visits->pluck('referer')->all();
//
//        foreach ($visit_social as $vs)
//            switch ($vs){
//                case ('www.google.com'):
//                    $me = 'good';
//                    break;
//                case ('Direct'):
//                    $me = 'The Same Shit';
//                    break;
//                default:
//                    $me = 'fuck';
//            }
//
//
//        dd($me);













        return response()->view('dashboard', compact(['labels','data','exmp', 'visits_pages', 'visitors_count', 'unique_visitor', 'visits_page_repeated']));
    }
}
