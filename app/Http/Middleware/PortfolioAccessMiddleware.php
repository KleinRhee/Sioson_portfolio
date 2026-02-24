<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class PortfolioAccessMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('Portfolio Page Accessed: ' . $request->url());
        
        return $next($request);
    }
}