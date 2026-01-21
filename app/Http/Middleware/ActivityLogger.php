<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\ActivityController;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActivityLogger
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->isMethod('get')) {
            $path = $request->path();
            $formType = null;
            if ($path === 'listingrequest') {
                $formType = 'listing_home';
            } elseif ($path === 'listingrequestproj') {
                $formType = 'listing_project';
            } elseif ($path === 'listingrequestindiv') {
                $formType = 'listing_individual';
            }

            app(ActivityController::class)->logVisit($request, $formType);
        }

        return $response;
    }
}
