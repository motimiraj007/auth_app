<?php

namespace App\Services;

use Database\Config;
use Database\DB;

class App
{
    private static DB $db;

    public function __construct(protected Config $config)
    {
        static::$db = new DB($config->db ?? []);
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run(): void
    {
        try {
            echo Route::resolve($this->config->server);
        } catch (\App\Exceptions\RouteNotFoundException $e) {
            http_response_code(404);
            echo \App\Services\View::make('error/404');
        }
    }
}