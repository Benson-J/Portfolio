<?php require('dbDisplay.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/Portfolio</title>
</head>
<body>
    <h3>Portfolio title text</h3>
    <form method="get" action="dbEdit.php">
        <textarea name="aboutTitle">Current text goes here</textarea>
        <input type="submit">
    </form>
    <h3>Edit/Delete Items</h3>
    <?php displayAboutEntries($db) ?>
    <a href="index.php">Back</a>
</body>
</html>