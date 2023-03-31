<?php

namespace App\Controller;

use App\Services\App;
use App\Services\View;

class SessionController
{
    public function create(): View
    {
        session_start();
        if (isset($_SESSION['is_verified'])) {
            header('location: /', true);
            exit();
        }
        return View::make('session/create');
    }

    public function store()
    {
        session_start();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $db = App::db();
        $stmt = $db->prepare("SELECT email, password from users WHERE email=:email");
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(\PDO::FETCH_OBJ);

        if ($user === false) {
            $_SESSION['email'] = $email;
            $_SESSION['credentials'] = "Wrong credentials. Try again!";
            header('location:/login?msg=false', true, 302);
            exit();
        } else {
            if (password_verify($password, $user->password)) {
                $_SESSION['is_verified'] = true;
                unset($_SESSION['credentials'], $_SESSION['email']);
                header('location:/');
                exit();
            }
            $_SESSION['email'] = $email;
            $_SESSION['credentials'] = "Wrong credentials. Try again!";
            header('location:/login?msg=false', true, 302);
        }
    }

    public function destroy()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location:/");
        exit;
    }

}