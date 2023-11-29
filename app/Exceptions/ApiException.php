<?php
// app/Exceptions/ApiException.php

namespace App\Exceptions;

use Exception;

class ApiException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}
