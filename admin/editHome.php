<?php require('dbDisplay.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/Home</title>
</head>
<body>
    <h3>Home Title Text</h3>
    <form method="post" action="dbEdit.php">
        <textarea name="homeTitle"><?php echo displayTitle($db, 'home')?></textarea>
        <input type="submit">
    </form>
    <a href="index.php">Back</a>
</body>
</html>