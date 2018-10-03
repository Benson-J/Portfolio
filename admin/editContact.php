<?php require('dbDisplay.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/Contact</title>
</head>
<body>
    <h3>Edit/Delete Items</h3>
    <form method="post" action="dbEdit.php">
        <?php echo displayEntries($dataContact, 'contact') ?>
        <input type="submit">
    </form>
    <h3>New Item</h3>
    <form method="post" action="dbEdit.php">
        <textarea name="aboutTextNew"></textarea>
        <textarea name="aboutTypeNew"></textarea><br>
        <input type="submit">
    </form>
    <a href="index.php">Back</a>
</body>
</html>