<?php
session_start();

@$message=$_POST["message"];
@$send=$_POST["send"];

$erreur="bb";
if(isset($send)){

if(empty($message)) $erreur="Enter your message!";

   else{
    include("connexion.php");
    $message="";
     $ins=$pdo->prepare("insert into messages (message) values(?)");
     $erreur="entred";
       if($ins->execute(array($message)))
          header("location:userPage.php");
          
    }   
  }

 
?>


<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="footer.css" />
   <title>car-repair.com</title>
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>
 <body>
   <nav class="navbar">
     <!-- LOGO -->
   <div  class ="identity">
     <img  class ="logo" src="images/logo.png" alt="logo" height="50px">
     <div class="slogan"><h1 class="m">M</h1><h1>ical</h1></div>
    </div>
    
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
     
       <!-- NAVIGATION MENUS -->
       <div class="menu">
        <li><a  href="test.html" >Home </a></li> 
        <li><a  href="#">About </a></li> 
        <li><a  href="#">Company </a></li> 
        <li><a  href="#">Furnitures </a></li> 
        <li> <a  href="#" class="selected">Contact Us </a></li> 
        <li><img class ="user" src="images/user.png" alt="user"  /> <a href="login.php" >Login/Register</a></li>
        <li> <img class ="loop" src="images/loop.png" alt="recherche" /> </li>
       </div>
     </ul>
   </nav>
   <div class="separator"></div>
   <footer class="footer">
 <p><?php echo $erreur?></p>
  <div class="content-4">
  <ul class="contact">
    <li><img src="images/telephone.png" alt="telephone"><a>+71 890784493</a></li>
    <li><img src="images/location.png" alt="Locations" ><a>Locations</a></li>
    <li><img src="images/email.png" alt="email"><a>demo@gmail.com</a></li>
</ul>
<div class="last-part">
    <div class="map">
        <div class="social-media">
            <img src="images/fcb.png" alt="fcb">
            <img src="images/twt.png" alt="twt">
            <img src="images/in.png" alt="in">
            <img src="images/instg.png" alt="istg">
          </div>
     <div class="image"> <img  src="images/map.png" alt="map" width="580px" height="450px"> </div>
      <div class="newsletter" >
        <h3>Newsletter</h3>
        <input value="   ENTER YOUR MAIL">
        <button>SUBSCRIBE</button>
      </div>
    </div>
    
    <div class="formulaire">
    <div class="erreur"><?php echo $erreur ?></div>
       <form class="form" name="fo" method="post" action="">
    
       <label>MESSAGE</label>
       <input type="text" id="message" name="message" value="<?php echo $message?>">
       <div class="left-part">
        <button type="submit" class="send-btn"  id="send" name="send"> SEND</button>
        </div>
       </form>
     </div>
  </div>
 </div>
  <div class="copyright">
    <input value="Copyright 2019 All Right Reserved By Free  html Templates">
  </div> 
  </footer>
   </body>
   <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>
   </html>