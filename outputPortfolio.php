<?php

/*
 * Turns the database list of portfolio items into html displaying the items
 *
 * @param array $data is the array containing all the portfolio items
 *
 * @return string is the html containing the portfolio items
 */
function outputPortfolio (array $data) : string {
    $echoedString = '';
    foreach ($data as $row) {
        if (count($row) != 5) {
            return 'Invalid array passed';
        }
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