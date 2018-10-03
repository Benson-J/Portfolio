<?php

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmtAbout = $db->query('SELECT `about`.`id`,`about`.`text` AS `infoA`,`aboutTypes`.`column` AS `infoB` FROM `about` JOIN `aboutTypes` ON `about`.`column_id` = `aboutTypes`.`id`;');
$dataAbout = $stmtAbout->fetchAll();
$stmtContact = $db->query('SELECT `id`,`text` AS `infoA`,`link` AS `infoB` FROM `contact`;');
$dataContact = $stmtContact->fetchAll();
$stmtSocial = $db->query('SELECT `id`,`icon` AS `infoA`,`link` AS `infoB` FROM `socialLinks`;');
$dataSocial = $stmtSocial->fetchAll();
$stmtPortfolio = $db->query('SELECT `id`,`title`,`link`,`github`,`image`,`description` FROM `portfolio`;');
$dataPortfolio = $stmtPortfolio->fetchAll();

/*
 * Displays heading text of a given page
 *
 * @param PDO $db is the database containing the heading text
 * @param string $pageName is the name of the page whose heading will be displayed
 *
 * @return string is the heading text of the chosen page
 */
function displayTitle(PDO $db, string $pageName) : string {
    $stmt = $db->query('SELECT `content` FROM `titles` WHERE `page` = "' . $pageName . '";');
    $data = $stmt->fetch();
    return $data['content'];
}

/*
 * Echoes 2 form inputs & a checkbox per item, for editing or deleting
 *
 * @param $data is the array containing the data
 * @param $pageName is the name if the page that needs the data
 *
 * @return string is the html for the form text inputs & delete checkboxes
 */
function displayEntries($data, string $pageName) : string {
    $echoedString = '';
    foreach ($data as $row) {
        $echoedString .= '
        <textarea name="' . $pageName . $row['id'] . 'A">' . $row['infoA'] . '</textarea>
        <textarea name="' . $pageName . $row['id'] . 'B">' . $row['infoB'] . '</textarea>
        Check to delete: <input type="checkbox" name="delete' . $row['id'] . '"><br>';
    }
    return $echoedString;
}

/*
 * Echoes a set of forms containing items on portfolio page, for editing or deleting them
 *
 * @param $data is the array containing all the portfolio items
 *
 * @return string is the html for the form text inputs & delete checkboxes
 */
function displayPortfolio($data) : string {
    $echoedString = '';
    foreach ($data as $row) {
        $echoedString .= '
            <textarea name="portfolioName' . $row['id'] . '">' . $row['title'] . '</textarea>
            <textarea name="portfolioLink' . $row['id'] . '">' . $row['link'] . '</textarea>
            <textarea name="portfolioGithub' . $row['id'] . '">' . $row['github'] . '</textarea>
            <textarea name="portfolioImage' . $row['id'] . '">' . $row['image'] . '</textarea>
            <textarea name="portfolioDescription' . $row['id'] . '">' . $row['description'] . '</textarea>
            Check to delete: <input type="checkbox" name="delete' . $row['id'] . '"><br>';
    }
    return $echoedString;
}

/*
 * Checks each non-hidden file in image folder, & outputs into html
 *
 * @return string is html displaying image, image name, & deletion checkbox
 */
function displayImages() : string {
    $imageList = scandir('../images');
    $echoedString = '';
    foreach ($imageList as $image) {
        if ($image[0] != '.') {
            $echoedString .= '<img width="200px" src=../images/' . $image . '> ' . $image . ' , Check to delete: <input type="checkbox" name="delete' . $image . '"><br>';
        }
    }
    return $echoedString;
}