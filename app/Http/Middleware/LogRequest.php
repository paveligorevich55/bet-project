<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;
use App\Models\Event;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {


        // Make it an after middleware
        $response = $next($request);
        $agent = new Agent();

        if (! $agent->isRobot()){
            $device = $agent->deviceType();
            $system = $agent->platform();
        } else {
            $device = $agent->robot();
            $system = $agent->robot();
        }

        if ($position = Location::get()){
            $country = $position->countryName;
            $city = $position->cityName;
            $ip = $position->ip;
        } else {
            $country = 'Local';
            $city = 'Local';
            $ip = 'Local';
        }
        if ($request->headers->has('referer')){
            $url = $request->headers->get('referer');
            $referer = parse_url($url);
            $referer = $referer['host'];

        } else {
            $referer = 'Direct';
        }
        try {
            Event::create([
                'type' => 'pageview',
                'attribute' => $request->path(),
                'useragent' => $request->userAgent(),
                'visitor_id' => crypt($ip, config('hashing.encryption_key')),
                'visitor_ip' => $ip,
                'device' => $device,
                'country' => $country,
                'city' => $city,
                'referer' => $referer,
                'system' => $system,
            ]);

            return $response;
        } catch (\Error $e) {
            report($e);
            return $response;
        }
    }
}
