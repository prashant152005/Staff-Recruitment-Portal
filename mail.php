<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INQUIRY PAGE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <div class="brahmastra">
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3>Get In Touch</h3>
        <input type="text" id="name" placeholder="Your Name" required>
        <input type="email" id="email" placeholder="Enter Email" required>
        <input type="text" id="phone" placeholder="Phone Number" required>
        <textarea id="message" rows="4" placeholder="How Can We Help you"></textarea>
        <button type="submit">Send</button>
        </form>
    </div>
    <!-- <script src=" https://smtpjs.com/v3/smtp.js"></script>
    <script> 
    function sendEmail(){
     let name= document.getElementById("name").value;
     let email= document.getElementById("email").value;
     let phone= document.getElementById("phone").value;
     let message= document.getElementById("message").value;
        Email.send({
    Host : "smtp.elasticemail.com",
    Username : "shivendra.a.pathak@slrtce.in",
    Password : "346088564500FD9CC72B8CC6CAF8813461DA",
    SecureToken:" 851b3127-c54d-4ef2-afd9-2c99a558148b",
    To : 'shivenbhai798@gmail.com',
    From :"shivendra.a.pathak@slrtce.in",
    Subject : "Starf Portal Enquiry",
    Body : "Name:" + document.getElementById("name").value
           +"<br>Email:" + document.getElementById("email").value
           +"<br>Phone Number:" + document.getElementById("phone").value
           +"<br>message:" + document.getElementById("message").value
}).then(
  message => alert("message sent successfully")
);

    }
    </script> -->

</body>
</html>