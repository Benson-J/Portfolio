<?php

session_start();
require_once('../functions/login.php');
header('Location: ' . checkSession($_SESSION['loggedIn']));

require_once('dbStream.php');

if (array_key_exists ('name', $_POST)) {
    $stmt = $db->prepare('INSERT INTO `portfolio` (`title`,`link`,`github`,`image`,`description`) VALUES (:title, :link, :github, :image, :description);');
    $stmt->execute([':title' => $_POST['name'], ':link' => $_POST['link'], ':github' => $_POST['github'], ':image' => $_POST['image'], ':description' => $_POST['description']]);
} else {
    foreach ($_POST as $row) {
        if ($row['delete'] == 'on') {
            $stmt = $db->prepare('DELETE FROM `portfolio` WHERE `id` = :id;');
            $stmt->execute([':id' => $row['id']]);
        }
        $stmt = $db->prepare('UPDATE `portfolio` SET `title` = :title,`link` = :link,`github` = :github,`image` = :image, `description` = :description WHERE `id` = :id;');
        $stmt->execute([':title' => $row['name'], ':link' => $row['link'], ':github' => $row['github'], ':image' => $row['image'], ':description' => $row['description'], ':id' => $row['id']]);
    }
}
header('Location: editPortfolio.php');