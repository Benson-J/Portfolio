<?php

$db = new PDO('mysql:dbname=portfolio;host=127.0.0.1', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


/*
 * Displays title text of a given page
 *
 * @param $db is the database containing the title text
 * @param string $pageName is the name of the page whose title will be displayed
 *
 * @return string is the title text of the chosen page
 */
function displayTitle($db, string $pageName) : string{
    $stmt = $db->query('SELECT `content` FROM `titles` WHERE `page` = "' . $pageName . '";');
    $data = $stmt->fetch();
    return $data['content'];
}

/*
 * Echoes a set of forms containing items on about page, for editing or deleting them
 *
 * @param $db is the database containing the items
 */
function displayAboutEntries($db) : void {
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
}
