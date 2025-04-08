<?php
    error_reporting(0);
    $meg="";

    if(isset($_POST['upload'])){
        $filename=$_FILES["uploadfile"]["name"];
        $tempname=$_FILES["uploadfile"]["tmp_name"];
        $folder ="./images/".$filename;
        
        $db=mysqli_connect("localhost","root","","img");

        $sql = "INSERT INTO documents (filename) VALUES ('$filename')";

        mysqli_query($db, $sql);

        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="photo">Photograph</label>
    <input type="file" name="photo" id="">
</body>
</html>