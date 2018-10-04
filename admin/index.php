<?php

session_start();
require_once('../functions/login.php');
header('Location: ' . checkSession($_SESSION['loggedIn']));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin</title>
</head>
<body>
    <a href="editPortfolio.php" title="Edit the portfolio page">Portfolio</a><br>
    <a href="logout.php" title="Log out">Log out</a>
</body>
</html>