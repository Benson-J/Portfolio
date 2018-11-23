<?php

/**
 * Checks that the passed array has the right number of items
 *
 * @param array $array is the array to be checked
 * @param int $count is the number of items the array should have
 *
 * @return bool is if the array contains the right number of items or not
 */
function checkArrayCount (array $array, int $count) {
    if (count($array) != $count) {
        return 'Invalid array passed';
    }
}

/**
 * Returns a set of forms containing items on portfolio page, for editing or deleting them
 *
 * @param array $data is the array containing all the portfolio items
 *
 * @return string is the html for the form text inputs & delete checkboxes
 */
function displayPortfolio (array $data) : string {
    $echoedString = '';
    foreach ($data as $row) {
        $rowCheck = checkArrayCount($row, 6);
        if (!empty($rowCheck)) return $rowCheck;
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

/**
 * Turns the database list of portfolio items into html displaying the items
 *
 * @param array $data is the array containing all the portfolio items
 *
 * @return string is the html containing the portfolio items
 */
function showProjects (array $data) : string {
    $echoedString = '';
    foreach ($data as $row) {
        $rowCheck = checkArrayCount($row, 5);
        if (!empty($rowCheck)) return $rowCheck;
        $echoedString .= '
            <div class="portfolioBox">
            <a href="' . $row['link'] . '"><img href ="" src="images/' . $row['image'] . '"></a>
            <div class="portfolioBoxText">
            <h3>' . $row['title'] . '</h3>
            <p>' . $row['description'] . '</p>
            </div>
            <a href="' . $row['github'] . '" target="_blank"><i class="fab fa-github"></i></a>
            </div>
            ';
    }
    return $echoedString;
}