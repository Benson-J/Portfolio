<?php

/*
 * Checks that username & password are correct
 *
 * @param string $user is the input username
 * @param string $password is the input password
 *
 * @return string is the redirect location
 */
function verifyPassword (string $user, string $pass) : string {
    if (array_key_exists($user,LOGINLIST) && password_verify($pass, LOGINLIST[$user])) {
        $_SESSION['loggedIn'] = 1;
        return 'index.php';
    } else {
        return 'login.php?error=1';
    }
}

/*
 * Checks if the user is not logged in
 *
 * @param $sessID is the session data storing 1 if logged in
 *
 * @return is the redirect location
 */
function checkSession($sessID) {
    if (!$sessID) {
        return 'login.php?error=2';
    }
}