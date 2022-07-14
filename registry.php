<?php
   session_start();
   @$name=$_POST["name"];
   @$email=$_POST["email"];
   @$password=$_POST["password"];
   @$telnum=$_POST["telnum"];
   @$registry=$_POST["registry"];
  
   $erreur="";
   $usertype="user";
   if(isset($registry)){
      if(empty($name)) $erreur="name is empty!!";
      elseif(empty($email)) $erreur="email is empty!!";
      elseif(empty($password)) $erreur="Password is empty!!";
  
      elseif(empty($telnum)) $erreur="Phone Number is empty!!";
      
   
      else{
         include("connexion.php");
         $erreur="entred";
         $sel=$pdo->prepare("select email from login where email=? limit 1");
        
         $sel->execute(array($email));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="user is already subscribed!";
         else{
            $ins=$pdo->prepare("insert into login(name,email,telnum,password) values(?,?,?,?)");
            
            if($ins->execute(array($name,$email,$telnum,md5($password))))
               header("location:login.php");
               $erreur="insert done!";
         }   
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="registry.css" />
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
        <li> <a  href="contact.php" >Contact Us </a></li> 
        <li><img class ="user" src="images/user.png" alt="user"  /> <a href="#" class="selected" >Login/Register</a></li>
        <li> <img class ="loop" src="images/loop.png" alt="recherche" /> </li>
       </div>
     </ul>
   </nav>
   <div class="separator"></div>
   <div ><?php echo $erreur?></div>
   <footer class="footer">
 
  <div class="content-4">
  <ul class="contact">
    <li><img src="images/telephone.png" alt="telephone"><a>+71 890784493</a></li>
    <li><img src="images/location.png" alt="Locations" ><a>Locations</a></li>
    <li><img src="images/email.png" alt="email"><a>demo@gmail.com</a></li>
</ul>
<div class="last-part">
    <div class="formulaire">
    <div class="erreur"><?php echo $erreur ?></div>
      <form class="form" name="fo" method="post" action="">
    
         <label>NAME</label>
       <input type="text" id="name"name="name" value="<?php echo $name?>" />
       <label>EMAIL</label>
       <input type="email"id="email"name="email" value="<?php echo $email?>">
       <label> PHONE NUMBER</label>
       <input type="tel" id="telnum" name="telnum" value="<?php echo $telnum?>" required>
     
       <label>Mot de passe</label>
       <input type="password" id="password" name="password" value="<?php echo $password?>">
       <div class="left-part">
      <button type="submit" class="send-btn"  id="registry" name="registry" >REGISTRY</button>

</div>
     </form>
     

    </div>
  </div>
  
  </div>
 
 

  <!-- <div class="copyright">
    <input value="Copyright 2019 All Right Reserved By Free  html Templates">
  </div> -->
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