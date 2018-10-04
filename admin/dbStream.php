<?php

session_start();
require('../functions/login.php');
header('Location: ' . checkSession($_SESSION['loggedIn']));

$db = new PDO('mysql:dbname=portfolioJames;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);