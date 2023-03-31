<?php

namespace App\Controller;

use App\Services\View;

class HomeController
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['is_verified'])) {
            header('location:/login', true, 302);
            exit;
        }
        return View::make('home');
    }
}