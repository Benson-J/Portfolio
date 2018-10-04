<?php

session_start();
const LOGINLIST = ['admin' => '$2y$10$i/I2uaPwmad5zPeSdpLSzuJpvgCbxk6YSuHlCjD7sE7BO116JflEW'];

require('../functions/login.php');

if (isset($_POST['user']) || isset($_POST['pass'])) {
    header('Location: ' . verifyPassword($_POST['user'], $_POST['pass'], LOGINLIST));
}
if ($_SESSION['loggedIn']) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/Portfolio</title>
</head>
<body>
    <form method="post">
        <input type="text" name="user" placeholder="Username"><br>
        <input type="password" name="pass" placeholder="Password"><br>
        <input type="hidden" name="error" value="1">
        <input type="submit">
    </form>
    <?php
    if ($_GET['error'] == 1) {
        echo 'Incorrect username or password';
    }
    if ($_GET['error'] == 2) {
        echo 'Please log in to access admin functions';
    }
    ?>
</body>
</html>