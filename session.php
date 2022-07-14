<?php
   session_start();
 
   if($_SESSION["autoriser"]!="oui")
   {
      header("location:login.php");
      exit();
      
   }

   
   if( $_SESSION["Usertype"]=="user"||$_SESSION["Usertype"]=="USER")
      // $bienvenue="Bonjour et bienvenue ".
      // $_SESSION["usertypeName"]." dans votre espace personnel";
      header("location:userPage.php");
     
   else
 /*   $bienvenue="Bonsoir et bienvenue ".
   $_SESSION["usertypeName"]." dans votre espace personnel"; */
  // include("adminPage.php");
 
  header("location:adminPage.php");
 
?>
