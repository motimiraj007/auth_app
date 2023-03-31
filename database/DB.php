<?php

namespace Database;

/**
 * @mixin \PDO
 */

class DB
{
    private \PDO $pdo;

    public function __construct(protected array $config){
        $host = $config['host'];
        $db = $config['dbname'];
        $driver = $config['driver'];
        $username = $config['username'];
        $password = $config['password'];
        $dsn = $driver . ":host=" . $host . ";dbname=" . $db;
        $this->pdo = new \PDO($dsn, $username, $password);
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->pdo, $name], $arguments);
    }

}