<?php require('dbDisplay.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/About</title>
</head>
<body>
    <h3>About Title Text</h3>
    <form method="post" action="dbEdit.php">
        <textarea name="aboutTitle"><?php echo displayTitle($db, 'about')?></textarea><br>
        <input type="submit">
    </form>
    <h3>Edit/Delete Items</h3>
    <form method="post" action="dbEdit.php">
        <?php displayEntries($stmtAbout, 'about') ?>
        <input type="submit">
    </form>
    <h3>New Item</h3>
    <form method="post" action="dbEdit.php">
        <textarea name="aboutInfoTextNew"></textarea>
        <textarea name="aboutInfoTypeNew"></textarea><br>
        <input type="submit">
    </form>
    <a href="index.php">Back</a>
</body>
</html>