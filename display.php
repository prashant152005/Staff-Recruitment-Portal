<html>
    <head>
        <style>
            body{
                background-color: greenyellow;
            }
            table{
                background-color: white;
            }
            </style>
    </html>




<?php 
include("new.php");
error_reporting(0);

$query = "SELECT * FROM REGISTER";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

//echo $total;
if($total != 0){
    ?>
    <h2 align="center"><mark>Displaying records</marks></h2>
    <center><table border="5" cellspacing="7" width="75%">
     <tr>
        <th width="10%">USER</th>
        <th width="10%">PASSWORD</th>
        <th width="20%">Email</th>
    



<?php
   while($result = mysqli_fetch_assoc($data)){
  echo "
        <tr>
           <td>".$result['user']."</td>
           <td>".$result['password']."</td>
           <td>".$result['email']."</td>
  </tr>
  ";
   }
}
else{
    echo "table has no records";
}
?>
</table>
    </center>
