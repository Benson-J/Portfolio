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
        <?php echo displayPortfolio($stmtPortfolio) ?>
        <input type="submit">
    </form>
    <h3>New Item</h3>
    <form method="post" action="dbEdit.php">
        <textarea name="portfolioNameNew"></textarea>
        <textarea name="portfolioLinkNew"></textarea>
        <textarea name="portfolioGithubNew"></textarea>
        <textarea name="portfolioImageNew"></textarea>
        <textarea name="portfolioDescriptionNew"></textarea><br>
        <input type="submit">
    </form>
    <a href="index.php">Back</a>
</body>
</html>