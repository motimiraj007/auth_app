<?php

namespace App\Controller;

use App\Enums\Error;
use App\Enums\RegExp;
use App\Models\User;
use App\Services\App;
use App\Services\Validation;
use App\Services\View;
use Database\DB;

class RegisterController
{
    public function create()
    {
        session_start();
        if (isset($_SESSION['is_verified'])) {
            header('Location:/', true);
            exit();
        }
        return View::make('register/create');
    }

    public function store()
    {
        $user = new User();
        $user->create();
    }

}