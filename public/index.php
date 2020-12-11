<?php

use Mars\src\Core;
use App\Controllers\SiteController;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Core(dirname(__DIR__));

$app->router->get('/', [App\Controllers\SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'saveData']);

$app->run();