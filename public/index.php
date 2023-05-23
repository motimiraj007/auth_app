<?php

require __DIR__ . './../vendor/autoload.php';


use App\Services\Route;
use App\Controller\{RegisterController, HomeController, SessionController};

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('RESOURCE_PATH', __DIR__ . '/../resources');
define('VIEW_PATH', RESOURCE_PATH . '/views');
define('APP_PATH', __DIR__ . '/../app');
define('TEST_PATH', __DIR__ . '/test');


Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

(new \App\Services\App(new \Database\Config($_ENV, $_SERVER)))->run();
