<?php require('dbDisplay.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../normalize.css">
    <title>James | Admin/Images</title>
</head>
<body>
    <h3>Delete Images</h3>
    <form action="deleteImage.php" method="post" enctype="multipart/form-data">
        <?php echo displayImages(); ?>
        <input type="submit">
    </form>
    <h3>Upload Image</h3>
    <form action="uploadImage.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit">
    </form>
    <a href="index.php">Back</a>
</body>
</html>