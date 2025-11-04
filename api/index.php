<?php

// ----------------------------------------------------
// Bootstrap Laravel (for Vercel PHP runtime)
// ----------------------------------------------------
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// ----------------------------------------------------
// Handle the incoming HTTP request
// ----------------------------------------------------
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::capture();

$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);
