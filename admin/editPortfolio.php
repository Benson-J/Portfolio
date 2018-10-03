<?php require('dbDisplay.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/Portfolio</title>
</head>
<body>
    <h3>Edit/Delete Items</h3>
    <form method="post" action="dbEdit.php">
        <?php echo displayPortfolio($dataPortfolio) ?>
        <input type="submit">
    </form>
    <h3>New Item</h3>
    <form method="post" action="dbEdit.php">
        <textarea name="name"></textarea>
        <textarea name="link"></textarea>
        <textarea name="github"></textarea>
        <textarea name="image"></textarea>
        <textarea name="description"></textarea><br>
        <input type="submit">
    </form>
    <a href="index.php">Back</a>
</body>
</html>