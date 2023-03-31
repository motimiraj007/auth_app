<?php

namespace App\Enums;

class Error
{
    const MSG_NAME = 'Invalid Name';
    const MSG_EMAIL = 'Invalid email format string';
    const MSG_PASS = 'Use at least 8 characters and a mix of letters (uppercase and lowercase), numbers, and symbols.';
    const MSG_USERNAME = 'use at least 3 character.';

    public static array $errors = [];
    public static array $messages = [
        'name' => Error::MSG_NAME,
        'username' => Error::MSG_USERNAME,
        'email' => Error::MSG_EMAIL,
        'password' => Error::MSG_PASS
    ];
}
