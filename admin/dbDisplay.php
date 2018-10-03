<?php

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmtPortfolio = $db->query('SELECT `id`,`title`,`link`,`github`,`image`,`description` FROM `portfolio`;');
$dataPortfolio = $stmtPortfolio->fetchAll();

/*
 * Echoes a set of forms containing items on portfolio page, for editing or deleting them
 *
 * @param array $data is the array containing all the portfolio items
 *
 * @return string is the html for the form text inputs & delete checkboxes
 */
function displayPortfolio(array $data) : string {
    
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