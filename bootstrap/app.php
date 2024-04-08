<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            'clientes/*',
            'http://127.0.0.1:8000/clientes',
            'http://127.0.0.1:8000/comprobantes',
            'http://127.0.0.1:8000/pedidos',
            'http://127.0.0.1:8000/farmacias',
            'http://127.0.0.1:8000/empleados',
            'http://127.0.0.1:8000/medicamentos',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
