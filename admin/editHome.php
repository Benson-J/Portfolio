<?php require('dbDisplay.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/Home</title>
</head>
<body>
<h3>Home title text</h3>
    <form method="get" action="dbEdit.php">
        <textarea name="homeTitle">Current text goes here</textarea><br>
        <input type="submit">
    </form>
    <a href="index.php">Back</a>
</body>
</html>