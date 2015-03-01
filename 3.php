<?php

interface IAuthenticatable {
public function storePassword($password);
public function verifyPassword($password);
}

class Auth implements IAuthenticatable {
const SESSION_VARIABLE = 'password';

public function __construct()
{
session_start();
}

public function storePassword($password)
{
if (!$password) {
throw new Exception('Password can\'t be null');
}

$_SESSION[self::SESSION_VARIABLE] = md5($password);
}

public function verifyPassword($password)
{
if(!isset($_SESSION[self::SESSION_VARIABLE])) {
throw new Exception('Password not stored');
}

return md5($password) === $_SESSION[self::SESSION_VARIABLE];
}
}
