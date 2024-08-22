<?php include("new.php");

//echo ("dgdfgfdgfdgfdgfdgdfgfdgfdgfd");
    $username =$_POST['loginn'];
  //  echo ("dgdfgfdgfdgfdgfdgdfgfdgfdgfd");
    $pwd =$_POST['password'];

    $query = "SELECT * from  register WHERE user = '$username' && password ='$pwd'";
    $data = mysqli_query($conn,$query);
    if($data){
        header('Location:job-page.html');
    }
    else{
     echo "<script>alert('Registeration Failed')</script>";
    }

//     $query ="SELECT * from  register WHERE user = '$username' && password ='$pwd' ";
//     $data = mysqli_query($conn,$query);
//     $total = mysqli_num_rows($data);
//     echo $total; 
//     if($total==1){
// echo "login ok";
//  header('Location:job-page.html');
    // }
    // else{
    //     echo "failed";
    // }
?>