<?php

namespace App\Enums;

enum RegExp
{
    // Name Input Field accepts only characters with a single white space
    const NAME = "/^[a-zA-Z'. -]+$/";
    // Email Input Field accepts only valid email format string with @ symbol
    const EMAIL = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
    // Use at least 8 characters and a mix of letters (uppercase and lowercase), numbers, and symbols.
    const PASSWORD = '/^(?=.*[\W])(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,50}$/';
    // Use at least 8, Max 20 Letters and numbers only
    const USERNAME = '/(.*[a-z]){3}/i';

}
