<?php
namespace GoGetSSL;

class AuthException extends Exception
{

    public function __construct()
    {
        parent::__construct('Please authorize first');
    }
}
