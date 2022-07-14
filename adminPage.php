
<?php
session_start();

@$show=$_POST["show"];
@$messages=$_POST["messages"];
$user_name=$_SESSION["Name"];

$erreur="";
$count_users=0;
$count_messages=0;
if(!empty($_POST['show'])) 
   {
       include("connexion.php");
         $sel=$pdo->prepare("SELECT email FROM login WHERE usertype='user' ");
         $sel->execute(array( $_SESSION["Usertype"]));
         $tab=$sel->fetchAll();
         $count_users= count($tab);
     if ($count_users==0)$erreur="there is no user";
     $sell=$pdo->prepare("SELECT id FROM messages where date > DATE_SUB(NOW(),INTERVAL 24 HOUR)");
     $sell->execute(array('id'));
     $tabb=$sell->fetchAll();
     $count_messages= count($tabb);
 if ($count_messages==0)$erreur="there is no message";
      }
 /* if(!empty($_POST['messages'])) 
          {
              include("connexion.php");
                $sel=$pdo->query("SELECT name,messge  FROM messages  order by date limit 1 ");
                $sel->execute(array($user_name,$user_message));
                $tab=$sel->fetchAll();
            $count= count($tab);
            $erreur=$tab;
         
               
                 }  */
         
elseif(!isset($_SESSION["Name"]))
{
	header("location:login.php");
}


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="adminPage.css" />
<head>
	<title>adminPage</title>
</head>
<body  onLoad="document.fo.adminPage.focus()">
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
        <li><img class ="user" src="images/user.png" alt="user"/><a href="#" class="selected" ><?php echo $_SESSION["Name"] ?></a></li>
        <li> <a href="test.html">Logout</a></li>
       </div>
     </ul>
   </nav>
   <div class="separator"></div>
  
   
   <form  name="fo" method="post" action="">
 <div class="categorie">
<input  type="submit" name="show" id="show" class="number" value="NUMBERS"/>
<input  type="submit" name="messages" id="messages" class="number" value="MESSAGES"/>
</div>
<div class="cadres">
<div class="cadre">
<div><h1><?php echo $count_users?></h1><img src="images/user.png" alt="user" width="40px"></div>
<div><h1><?php echo $count_messages ?></h1><img src="images/email.png" alt="email"></div>
</div>
<div class="tableau">


<table >
          <thead><th>Name</th>
          <th>Message</th>
          <th>Date/Heure</th>
        </thead>
            <tbody>
                <?php
                 if(!empty($_POST['messages'])) 
                 {
                     include("connexion.php");
                $rst = $pdo -> query("SELECT name,message,date  FROM messages  order by date ");
                 
                while($donnees = $rst->fetch())
                        {
                          $name = $donnees["name"];
                          $message = $donnees["message"];
                          $date = $donnees["date"];
                             
                            echo"<tr>";
                            echo "<td>".$name."</td><td>".$message."</td><td>".$date."</td>";
                            echo "</tr>";
                        }
                
                      }    
                ?>
            </tbody>

</div>
                    </div>
</form>
    
    
<!-- <h1>this IS <?php echo $_SESSION["Usertype"] ?> HOME PAGE</h1><br>
<?php echo $_SESSION["Name"] ?> <p>welcome</p> -->



</body>
</html>