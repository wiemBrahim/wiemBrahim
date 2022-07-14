<?php
   session_start();
  
   @$valider=$_POST["valider"];
   @$email=$_POST["email"];
   @$usertype=$_POST["usertype"];

   @$password=$_POST["password"];
   
   $erreur="";
   if(isset($valider))
   {
       include("connexion.php");
         $sel=$pdo->prepare("SELECT * FROM login WHERE email=?   limit 1");
         $sel->execute(array($email));
         $tab=$sel->fetchAll();     
         if(count($tab)>0){
          $_SESSION["Name"]=ucfirst(strtoupper($tab[0]["name"]));
          $_SESSION["Usertype"]=ucfirst(strtoupper($tab[0]["usertype"]));
          $_SESSION["autoriser"]="oui";
          $erreur="done!";
          header("location:session.php");
         
          }
   
        } 
     
?>

<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="login.css" />
   <title>car-repair.com</title>
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>
 <body  onLoad="document.fo.login.focus()">
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
        <li> <a  href="#" >Contact Us </a></li> 
        <li><img class ="user" src="images/user.png" alt="user"/><a href="#" class="selected" >Login/Register</a></li>
        <li> <img class ="loop" src="images/loop.png" alt="recherche"/></li>
       </div>
     </ul>
   </nav>
   <div class="separator"></div>
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
    
       <label>EMAIL</label>
       <input type="email"id="email" name="email">

       <label>USER TYPE</label>
       <select name="usertype" id="usertype" value="<?php echo $usertype?>" >
       <option value="" ></option>
    <option value="user" >User</option>
    <option value="admin" >Admin</option>
  
  </select>
       <label>Mot de passe</label>
       <input type="text" id="password" name="password" >
       <div class="left-part">
      <button type="submit" class="valider-btn"  id="valider" name="valider" >LOGIN</button>
      <button type="submit" class="registry-btn"  id="registry" name="registry"><a  href="registry.php" style="color:white"> REGISTRY</button>
         
      </div>
     </form>
     
 </div>
  </div>
  </div>
  </footer>
   </body>
   
   </html>