<?php

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function displayAboutEntries($db) {
    $stmt = $db->query('SELECT `about`.`id`,`about`.`text`,`aboutTypes`.`column` FROM `about` JOIN `aboutTypes` ON `about`.`column_id` = `aboutTypes`.`id`;');
    $data = $stmt->fetchAll();
    foreach ($data as $row) {
        echo '
        <form method="get" action="dbEdit.php">
            <textarea name="aboutInfoText' . $row['id'] . '">' . $row['text'] . '</textarea>
            <input type="text" name="aboutInfoType' . $row['id'] . '" value ="' . $row['column'] . '">
            Check to delete:<input type="checkbox" name="delete' . $row['id'] . '">
            <input type="submit">
        </form>';
    }
    echo '
    <h3>New Item</h3>
    <form method="get" action="dbEdit.php">
        <textarea name="aboutInfoTextNew"></textarea>
        <input type="text" name="aboutInfoTypeNew">
        <input type="submit">
    </form>';
}