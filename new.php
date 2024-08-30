<?php
$servername = 'localhost';
$username = "root";
$password ="";
$dbname = "starfportal";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
 // echo "ok";
}
else{
    echo "failed";
}