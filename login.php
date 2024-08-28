<?php 
 //include("abc.php");
 include("new.php");
 include("abc.php");

if(isset($_POST['login']))
{
    $username =$_POST['user name'];
    $pwd =$_POST['password'];
    $query =" SELECT *FORM FORM WHERE EMAIL = '$username' && passsword ='$pwd' ";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    //echo total; 
    if($total== 1){
//echo "login ok";
    }
    else{
        echo "failed";
    }
}




?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body> <section class="logs">
    <nav>
    <div class="hh">
            <a href="index.html"><img src = "https://i.postimg.cc/9M3P0KHX/22931313-transparent.png"></a></div>
            <div class="nav-links">
            <ul>
                <li>
                    <a href="login.php">LOGIN</a>
                </li>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contactus.html">CONTACT</a></li> 
            </ul>
        </div>
    </nav>
    <div class="form-box">
<div class="button-box">
    <div id="btn"></div>
    <button type="button" class="toggle-button" onclick="login()">Log in</button>
    <button type="button" class="toggle-button" onclick="register() ">register</button>
</div>
<div class="social-icons">
<a href="https://www.instagram.com/sem/campaign/emailsignup/?campaign_id=13530338610&extra_1=s|c|547419127631|e|instagram%20%27|&placement=&creative=547419127631&keyword=instagram%20%27&partner_id=googlesem&extra_2=campaignid%3D13530338610%26adgroupid%3D126262414014%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-1321618851291%26loc_physical_ms%3D1007785%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQiA8t2eBhDeARIsAAVEga01Pevc6LogxGfSaQDzRk9Qb3TLS_G3E6E6V7BMgzjMNBlCKIal4tcaAtfgEALw_wcB"><img src="https://i.postimg.cc/FFM05dxk/instagram.png"></a>
    <a href="https://www.facebook.com/campaign/landing.php?campaign_id=14884913640&extra_1=s%7Cc%7C589460569849%7Cb%7Cfacebook%20%27%7C&placement=&creative=589460569849&keyword=facebook%20%27&partner_id=googlesem&extra_2=campaignid%3D14884913640%26adgroupid%3D128696220912%26matchtype%3Db%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-327195741349%26loc_physical_ms%3D1007785%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQiA8t2eBhDeARIsAAVEga2fcvk6lDH5Ks19e3cZWyaxx-spgafyBJgMoNoRI419_ixyVnWf1A8aAv7VEALw_wcB"><img src="https://i.postimg.cc/htbj5xmP/facebook.png"></a>
    <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><img src="https://i.postimg.cc/yxcgYjTg/twitter.png"></a>
</div>
<form id="login" class="input-group">
    <input type="text" id="loginn" class="input-field" placeholder="user id" required>
<input type="text" id="password" class="input-field" placeholder="Enter Password" required>
<input type="checkbox" class="check-box" required><span>Remember Password</span>
<button type="submit" class="submit-btn">Log in</button>
</form>
<form id="register" class="input-group" action="#" method="post" enctype="multipart/form-data">
    <input type="text" class="input-field" placeholder="user id" required name="fname">
<input type="text" class="input-field" placeholder="Enter Password" required name="lname">
<input type="email" class="input-field" placeholder="Email id" required name="email">
<input type="checkbox" class="check-box" required><span>I Agree to terms & Conditions</span>
<button type="submit" class="submit-btn" value="register" name="register">Register</button>
</form>
    </div>
    </section>
</body>
<!--{% if Enter password == 12345678 or user id == shiven1 %}<a href="job-page.html"></a> {else %}<a href="shaadi-com.html" ></a>{endif %}-->
<script>
var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");


function register(){
    x.style.left="-400px";
    y.style.left="50px";
    z.style.left="110px";
}
function login(){
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0";
}
/*
function auth(){
var emaill = document.getElementById('loginn').value;
var pasword = document.getElementById('password').value;
if(emaill =='shiven@gmail.com'&& pasword=='shivendra123'){
    window.location.assign("index.html");
    alert('login successfully');
}
else{
    alert('Invalid information');
    return;
}


}*/
</script>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
.header
{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(#0ba53a,rgba(245, 247, 251, 0.897)),url("C:\Users\Shivendra Pathak\Downloads\html\banner.png");
    background-position: center;
    background-size: cover;
    position: relative;

}
.hh h1{
    color: #000000;
    text-decoration: underline #000;
}
nav{
display: flex;
padding: 2% 6%;
justify-content: space-between;
align-items: center;
} 
nav img{
    width: 150px;
}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 13px;
}
.nav-links ul li::after{
    content: '';
    width: 100%;
    height: 2px;
    background: #000000;
    display: block;
    margin: auto;
    transition: 0.5s;
}
.nav-links ul li::after {
    width: 100%;
}
.logs{
    padding: 0;
    margin: 0;
    height: 100vh;
   background-color: #a5b9b6a9;
}
.form-box{
    width: 380px;
    height: 480px;
    position: relative;
    margin: 6% auto;
    background-color: #fff;
    padding: 5px;
    border: solid  #0ba53a;
    border-radius: 55px;
}
.button-box{
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.toggle-button{
    padding: 10px 30px;
    cursor: pointer;
    background-color: transparent;
    border: 0;
    outline: none;
    position: relative;
}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background: linear-gradient(to right,#0ba53a,#aab9ce);
    border-radius: 30px;
   transition: 0.5s;
}
.social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-sizing: 0 0 20px 0 #7f7f7f;
    cursor: pointer;
    border-radius: 30%;
}
.input-group{
    top: 180px;
    position: absolute;
    width: 280px;
    transition: .5s;
   }
   .input-field{
    width: 100%;
    padding: 10px 0;
    margin: 0;
    border-left: 0;
    border-right: 0;
    border-bottom: 1px solid#999;
    outline: none;
    background: transparent;
   }
   .submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right,#0ba53a,#aab9ce);
    border: 0;
    outline: none;
    border-radius: 30px;
   }
   .check-box{
    margin: 30px 10px 30px 0;
   }
   .span{
color: #777;
font-size: 12px;
bottom: 68px;
position: absolute;
   }
   #login{
    left: 50px;
   }
   #register{
    left: 450px;
   }
   .form-box{
    overflow: hidden;
   }
   .therm{
    height: 15vh;
    background-color:#858886;
   }</style>
   <?php
if($_POST["register"])
{
   $firstname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   //$upload = $_POST['upload'];

   $query = "INSERT INTO REGISTER VALUES ('$firstname','$lname','$email')";
   $data = mysqli_query($conn,$query);
   if($data){
    echo "<script>alert('Registeration Successfull')</script>";
   }
   else{
    echo "<script>alert('Registeration Failed')</script>";
   }
}
?>
</html>

 <?php
//print_r($_FILES["uploadfiles"]);
$filename = $_FILES["uploadfiles"]["name"]; 
$tempname = $_FILES["uploadfiles"]["tmp_name"];
$folder = "images/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
?> 