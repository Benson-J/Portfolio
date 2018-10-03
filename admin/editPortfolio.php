<?php
require ('dbStream.php');
$stmtPortfolio = $db->query('SELECT `id`,`title`,`link`,`github`,`image`,`description` FROM `portfolio`;');
$dataPortfolio = $stmtPortfolio->fetchAll();
require('dbDisplay.php');
?>
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
        <textarea name="name" placeholder="Project name"></textarea>
        <textarea name="link" placeholder="Project location"></textarea>
        <textarea name="github" placeholder="Github link"></textarea>
        <textarea name="image" placeholder="Image"></textarea>
        <textarea name="description" placeholder="Description"></textarea><br>
        <input type="submit">
    </form>
    <a href="index.php" title ="Back to dashboard">Back</a>
</body>
</html>