<?php // authenticate2.php
require_once 'login.php';

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

$un = "myUserName";
$pw = password_hash("secret", PASSWORD_DEFAULT);

if (
    isset($_SERVER['PHP_AUTH_USER']) &&
    isset($_SERVER['PHP_AUTH_PW'])
) {
    $un_temp = sanitise($pdo, $_SERVER['PHP_AUTH_USER']);
    $pw_temp = sanitise($pdo, $_SERVER['PHP_AUTH_PW']);

    if (password_verify(str_replace("'", "", $pw_temp), $pw) && strcmp($un, $un_temp)) {
        session_start();
        echo "Welcome $un<br><br>You are now logged in.";
    } else {
        die("Invalid username/password combination");
    }
} else {
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Please enter your username and password");
}

function sanitise($pdo, $str)
{
    $str = htmlentities($str);
    return $pdo->quote($str);
}
