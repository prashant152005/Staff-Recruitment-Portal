<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Title of the document</title>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data"> 
<input type="file" name=""><br><br>
<input type="submit" name="submit"  value="upload file">
</form>

</body>
</html>
<?php
//print_r($_FILES["uploadfiles"]);
$filename = $_FILES["uploadfile"]["name"]; 
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
?>