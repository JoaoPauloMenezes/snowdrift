<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ApiAutenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->bearerToken($request) == env('DATABASE_URL', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6InJlZFRlYW0iLCJpYXQiOjE1MTYyMzkwMjJ9.a9bpT3YnBs1TckrqOM5nOmOpcs2rEA7rsk249OAOtAU')) {
            return $next($request);
        }
        return response([
            'status' => 'ERROR',
            'message' => "User not autenticated"
        ], 404);
    }


    /**
     * Get the bearer token from the request headers.
     *
     * @return string|null
     */
    public function bearerToken(Request $request)
    {
        $header = $request->header('Authorization', '');
        if (Str::startsWith($header, 'Bearer ')) {
            return Str::substr($header, 7);
        }
        return false;
    }
}
