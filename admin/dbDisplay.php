<?php

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
        if (count($row) != 6) {
            return 'Invalid array passed';
        }
        $echoedString .= '
            <input type="hidden" name="' . $row['id'] . '[id]" value="' . $row['id'] . '">
            <textarea name="' . $row['id'] . '[name]">' . $row['title'] . '</textarea>
            <textarea name="' . $row['id'] . '[link]">' . $row['link'] . '</textarea>
            <textarea name="' . $row['id'] . '[github]">' . $row['github'] . '</textarea>
            <textarea name="' . $row['id'] . '[image]">' . $row['image'] . '</textarea>
            <textarea name="' . $row['id'] . '[description]">' . $row['description'] . '</textarea>
            Check to delete: <input type="checkbox" name="' . $row['id'] . '[delete]"><br>';
    }
    return $echoedString;
}