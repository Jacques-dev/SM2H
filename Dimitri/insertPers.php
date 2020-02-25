<?php require ('start.php'); ?>
<?php require ('varForm.php');?>

<form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit this form?');">
    <?php require_once "form.php"?>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php require ('end.php'); ?>
