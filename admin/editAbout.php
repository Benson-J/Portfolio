<?php require('dbDisplay.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/About</title>
</head>
<body>
<h3>About title text</h3>
    <form method="post" action="dbEdit.php">
        <textarea name="aboutTitle">Current text goes here</textarea><br>
        <input type="submit">
    </form>
    <?php
    // Function that displays
    ?>
    <a href="index.php">Back</a>
</body>
</html>