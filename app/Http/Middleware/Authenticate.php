<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return '/login'; // Redirect ke login jika belum login
        }
    }
}
// This middleware checks if the user is authenticated and redirects to the login page if not.