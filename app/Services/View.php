<?php

namespace App\Services;

use App\Exceptions\ViewNotFoundException;

class View
{
    public function __construct(protected string $path, protected array $params = [])
    {
    }

    public static function make(string $path, array $params = []): View
    {
        return new static($path, $params);
    }

    public function render()
    {
        if (!file_exists($path = VIEW_PATH . '/' . $this->path . '.php')) {
            throw new ViewNotFoundException();
        }

        extract($this->params);

        ob_start();
        include  $path;
        return ob_get_clean();
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? [];
    }

}