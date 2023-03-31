<?php

namespace Database;

/**
 * @property-read $db
 * @property-read $server
 */

class Config
{
    protected array $config = [];
    public function __construct($env, $server)
    {
        $this->config = [
            'server' => [
                'requestMethod' => $server['REQUEST_METHOD'],
                'requestURI' => $server['REQUEST_URI']
            ],
            'db' => [
                'dbname' => $env['DB_NAME'],
                'host' => $env['DB_HOST'],
                'username' => $env['DB_USER'],
                'password' => $env['DB_PASS'],
                'driver' => $env['DB_DRIVER']
            ]
        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? [];
    }

}