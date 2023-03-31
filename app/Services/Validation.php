<?php

namespace App\Services;

use App\Enums\Error;

class Validation
{
    private static bool $isValidAll = false;

    public static function validateAll(array $data): bool
    {
        static::$isValidAll = true;
        foreach ($data as $input => $reg):
            if (!preg_match($reg, static::filter_input($_POST[$input]))) {
                Error::$errors[$input] = Error::$messages[$input];
                static::$isValidAll = false;
            }
        endforeach;
        return static::$isValidAll;
    }

    public static function filter_input($input): string
    {
        return htmlspecialchars(stripslashes(trim($input)));
    }


}