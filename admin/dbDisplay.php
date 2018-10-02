<?php

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmtAbout = $db->query('SELECT `about`.`id`,`about`.`text` AS `A`,`aboutTypes`.`column` AS `B` FROM `about` JOIN `aboutTypes` ON `about`.`column_id` = `aboutTypes`.`id`;');
$stmtContact = $db->query('SELECT `id`,`text` AS `A`,`link` AS `B` FROM `contact`;');
$stmtSocial = $db->query('SELECT `id`,`icon` AS `A`,`link` AS `B` FROM `socialLinks`;');

/*
 * Displays heading text of a given page
 *
 * @param $db is the database containing the heading text
 * @param string $pageName is the name of the page whose heading will be displayed
 *
 * @return string is the heading text of the chosen page
 */
function displayTitle($db, string $pageName) : string {
    $stmt = $db->query('SELECT `content` FROM `titles` WHERE `page` = "' . $pageName . '";');
    $data = $stmt->fetch();
    return $data['content'];
}

/*
 * Echoes 2 form inputs & a checkbox per item, for editing or deleting
 *
 * @param $stmt is the object containing the default info for the inputs
 */
function displayEntries($stmt, string $pageName) : void
{
    $data = $stmt->fetchAll();
    foreach ($data as $row) {
        echo '
        <textarea name="' . $pageName . $row['id'] . 'A">' . $row['A'] . '</textarea>
        <textarea name="' . $pageName . $row['id'] . 'B">' . $row['B'] . '</textarea>
        Check to delete:<input type="checkbox" name="delete' . $row['id'] . '"><br>';
    }
}

/*
 * Echoes a set of forms containing items on portfolio page, for editing or deleting them
 *
 * @param $db is the database containing the items
 */
function displayPortfolio($db) : void {
    $stmt = $db->query('SELECT `id`,`title`,`link`,`github`,`image`,`description` FROM `portfolio`;');
    $data = $stmt->fetchAll();
    foreach ($data as $row) {
        echo '
        <form method="post" action="dbEdit.php">
            <textarea name="portfolioName' . $row['id'] . '">' . $row['title'] . '</textarea>
            <textarea name="portfolioLink' . $row['id'] . '">' . $row['link'] . '</textarea>
            <textarea name="portfolioGithub' . $row['id'] . '">' . $row['github'] . '</textarea>
            <textarea name="portfolioImage' . $row['id'] . '">' . $row['image'] . '</textarea>
            <textarea name="portfolioDescription' . $row['id'] . '">' . $row['description'] . '</textarea>
            Check to delete:<input type="checkbox" name="delete' . $row['id'] . '">
            <input type="submit">
        </form>';
    }
}