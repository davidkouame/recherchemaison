<?php namespace RainLab\User\Classes;

use Auth;
use Closure;
use Response;
use Redirect;

class AuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            // return Response::make('Forbidden', 403);
            return Redirect::to("auth/login");
        }

        return $next($request);
    }
}
