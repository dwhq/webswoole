<?php
namespace App\Swoole;


use Illuminate\Auth\Middleware\Authenticate as Middleware;

class FooBarMiddleware extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
