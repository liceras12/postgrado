<?php
namespace App\Http;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel{
    protected $middleware = [
       \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
       \App\Http\Middleware\VerifySession::class,
    ];
}