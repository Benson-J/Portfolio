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
    <form method="get" action="dbEdit.php">
        <textarea name="aboutTitle"><?php echo displayTitle($db, 'about')?></textarea>
        <input type="submit">
    </form>
    <h3>Edit/Delete Items</h3>
    <?php displayAboutEntries($db) ?>
    <h3>New Item</h3>
    <form method="get" action="dbEdit.php">
        <textarea name="aboutInfoTextNew"></textarea>
        <input type="text" name="aboutInfoTypeNew">
        <input type="submit">
    </form>
    <a href="index.php">Back</a>
</body>
</html>