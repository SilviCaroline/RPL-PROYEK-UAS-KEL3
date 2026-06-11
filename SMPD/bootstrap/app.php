<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

if (($_SERVER['VERCEL'] ?? false) || getenv('VERCEL')) {
    $tmpStorage = '/tmp/storage';

    if (!is_dir($tmpStorage)) {
        $dirs = [
            'app/public',
            'framework/cache/data',
            'framework/sessions',
            'framework/testing',
            'framework/views',
            'logs',
        ];
        foreach ($dirs as $dir) {
            mkdir("$tmpStorage/$dir", 0775, true);
        }
    }
}

$app = Application::configure(
    basePath: dirname(__DIR__)
)
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (
        Middleware $middleware
    ): void {

        $middleware->alias([

            'permission' =>
            \App\Http\Middleware\CheckPermission::class,

        ]);
    })

    ->withExceptions(function (
        Exceptions $exceptions
    ): void {

        //
    })

    ->create();

if (($_SERVER['VERCEL'] ?? false) || getenv('VERCEL')) {
    $app->useStoragePath('/tmp/storage');
}

return $app;
