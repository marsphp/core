<?php



use App\Controllers\SiteController;
use Mars\Core\Core;


require_once __DIR__ . '/../vendor/autoload.php';

$app = new Core(dirname(__DIR__));

$app->router->get('/', [App\Controllers\SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'saveData']);

$app->run();