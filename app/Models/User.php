<?php

namespace App\Models;

use App\Enums\Error;
use App\Enums\RegExp;
use App\Services\App;
use App\Services\Validation;

class User
{
    public function create(): int
    {
        session_start();

        $request = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        $isValid = Validation::validateAll([
            'name' => RegExp::NAME,
            'username' => RegExp::USERNAME,
            'email' => RegExp::EMAIL,
            'password' => RegExp::PASSWORD,
        ]);

        $db = App::db();

        $stmt = $db->prepare('SELECT * FROM users WHERE username=:username');
        $stmt->bindValue(':username', $request['username']);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_OBJ);
        $isDuplicateUsername = $result !== false;

        $stmt = $db->prepare('SELECT * FROM users WHERE email=:email');
        $stmt->bindValue(':email', $request['email']);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_OBJ);
        $isDuplicateEmail = $result !== false;

        if (($isValid === false) || ($isDuplicateUsername || $isDuplicateEmail)) {
            if ($isDuplicateEmail) {
                Error::$errors['email'] = 'The email already taken';
            }
            if ($isDuplicateUsername) {
                Error::$errors['username'] = 'This username already taken';
            }

            $_SESSION['errors'] = Error::$errors;
            $_SESSION['request'] = $request;

            header('location:/register?msg=FAIL', true, 302);
            exit;
        }

        try {
            $db->beginTransaction();
            $stmt = $db->prepare(
                'INSERT INTO users(`name`, `username`, `email`, `password`) VALUES (:name, :username, :email, :password);'
            );
            $stmt->bindValue(':name', $request['name']);
            $stmt->bindValue(':username', $request['username']);
            $stmt->bindValue(':email', $request['email']);
            $stmt->bindValue(':password', password_hash($request['password'], PASSWORD_BCRYPT));
            $stmt->execute();
            $user_id = $db->lastInsertId();
            $db->commit();

        } catch (\Throwable $t) {
            if ($db->inTransaction()) {
                $db->rollback();
            }
            throw $t;
        }

        $_SESSION['is_verified'] = true;

        unset($_SESSION['errors'], $_SESSION['request']);
        header('location:/');

        return (int)$user_id;
    }

    public static function find($id)
    {
        try {
            $db = App::db();
            $stmt = $db->prepare('SELECT * FROM users WHERE id=:id;');
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_OBJ);
        } catch (\Throwable $t) {
            if ($pdo->inTransaction()) {
                $pdo->rollback();
            }
            throw $t;
        }

        return $result;
    }
}