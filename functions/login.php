<?php

/*
 * Checks that username & password are correct
 *
 * @param string $user is the input username
 * @param string $password is the input password
 * @param array $credList is the array of usernames (keys) & passwords (values)
 *
 * @return string is the redirect location
 */
function verifyPassword (string $user, string $pass, array $credList) : string {
    if (password_verify($pass, $credList[$user])) {
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
    if ($sessID !== 1) {
        return 'login.php?error=2';
    }
}