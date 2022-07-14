


<?php
session_start();

@$message=$_POST["message"];
@$send=$_POST['send'];
$user_name=$_SESSION["Name"];



function alert($erreur) {
    echo "<script >alert('$erreur');</script>";
}
if(isset($send)) {
  if(empty($message)) alert("ENTER YOUR MESSAGE!");
  else  {
    include("connexion.php");
     $ins=$pdo->prepare("insert into messages (message,name) values (?,'$user_name')");
     alert("inserted!");
       if($ins->execute(array($message)))
     { $_SESSION["Message"]=["message"];
      
       alert("MESSAGE SENDED!");
     }
        }
          
    
  }

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="userPage.css" />
<head>
	<title></title>
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
        <li> <a  href="contact.php" >Contact Us </a></li> 
        <li><img class ="user" src="images/user.png" alt="user"/><a href="#" class="selected" ><?php echo $user_name ?></a></li>
        <li> <a href="test.html">Logout</a></li>
       </div>
     </ul>
   </nav>
   <div class="separator"></div>
   <section class="section-1">
    <img  class="cover" src="images/couverture.png"alt="transparent">
       <div class="paragraphe">
        <h1>CAR REPAIR SERVICES</h1>
          <p >It is a long established fact that a reader will be
        distracted by the readable content of <br>a page when looking
         at its layout.The point of using Lorem Ipsum is that it has<br> 
         a more-or-less normal distribution of letters </p>
         <button class ="btn-info" >MORE INFO</button>
         <button class ="btn-contact" >CONTACT US</button>
        </div>
        <img  class ="car" src="images/car.png" height="760px"alt="car"/>
        <div class="services">
        <div class="diagnose">
          <h3>AUTO DIAGNOSE</h3>
          <img  src="images/diagnostic.png" alt="diagnostic" >
          <p>ipsum dolor sit amet, consectetur adipiscing<br> elit, sed d veniam, adipiscing elit, sed d<br> veniam</p>
         </div>
        <div class="refill">
         <h3>AC GAZ REFILL</h3>
         <img  src="images/petrol.png" alt="petrol">
         <p>ipsum dolor sit amet, consectetur adipiscing<br> elit, sed d veniam, adipiscing elit, sed d<br> veniam</p>
        </div>
        <div class="wheel">
         <h3>WHEEL ALIGNEMENT</h3>
         <img  src="images/wheel.png"  alt="wheel">
         <p>ipsum dolor sit amet, consectetur adipiscing<br> elit, sed d veniam, adipiscing elit, sed d<br> veniam</p>
        </div>
    
     <div class="round-points">
      <div> <button class ="btn-moins" > < </button></div>
      <div><button class ="btn-plus" > > </button></div>
    </div>

    </div>
 </section>
<section class="section-2">
<div class= "content-1">
  <div><button class="about">About Our Car Service </button></div>

<div class="battons" ><img src="images/battons.png" alt="battons" ></div>
<div class="mecanicien" ></div>
<div class="dolor">
  <h4>Dolor sit amet, consectetur adipiscing elit, </h4>
  <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore <br>magna aliqua. Ut enim ad minim veniam, quis nostrud dolor sit amet,
     consectetur adipiscingelit, sed<br> do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis<br> nostrud dolor sit amet, consectetur
     adipiscing elit, sed do eiusmod tempor incididunt ut  labore et<br> dolore magna aliqua.Ut enim ad minim veniam, quis nostrud 
     dolor sit amet, consectetur adipiscing <br>elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam,<br> quis nostrud</p>
  <button class="more">About more</button>
</div>
<img/>
</div>
<div class= "content-2">
  <div><button class="about2">What We Do </button></div>
 <p>It is a long established fact that a reader will be distracted by the </p>
    <div class="photos" >
    <div class="superposition">
      <div  class="shadow"></div>
      <img class="photo1"src="images/red-car.png" alt="red-car" >
     <div class="quick"> 
       <h3 style="color: white">QUICK REPAIR</h3>
      <h4 style="color: #51fe44">TOTAL SERVICE</h4>
    </div>
    </div>
    <img class="photo"src="images/piece.png" alt="piece" >
    <img class="photo"src="images/serrer.png" alt="serrer" > 
     <img class="photo"src="images/piece2.png" alt="piece2" >
    
  </div>
  <button class="more2">See More</button>
</div>
<div class= "content-3">
  <div><button class="about2">Testimonial</button></div>
 <p>It is a long established fact that a reader will be distracted by the  </p>
    <div class="directors">
      <div class="left" >
  <div class="photo-director">  <img src="images/rocoyo.png" alt="rocoyo">
   <div class="nom">
      <h4>ROCOYO</h4>
    <h3>(It is a long )</h3>
  </div>
  </div>
  <div class="description">
    <p>It is a long established fact that a reader will be distracted by 
      the readable content of a page when looking at its layout. The point 
      of using Lorem Ipsum is that it has a more-or-less normal distribution 
      of letters, as </p>
    </div>
   </div>
   <div class="right" >
    <div class="photo-director">  <img src="images/jckolo.png" alt="jckolo" >
      <div class="nom">
      <h4>JCKOLO</h4>
    <h3>(It is a long )</h3>
    </div>
    </div>
    
   <div class="description"> <p>It is a long established fact that a reader will be distracted by 
      the readable content of a page when looking at its layout. The point 
      of using Lorem Ipsum is that it has a more-or-less normal distribution 
      of letters, as </p>
    </div>
   </div>
  </div>
  <div class="boutons">
    <button class="bouton-bleu"></button>
    <button class="bouton-vert"></button>
    <button class="bouton-bleu"></button>
  </div>
 
</div>
<footer class="footer">
  <div class="espace"></div>
<div class="content-4">
<ul class="contact">
  
<button class="contact-btn">Contact Us</button>
<li><img src="images/location.png" alt="Locations" ><a>Locations</a></li>
<li><img src="images/telephone.png" alt="telephone"><a>+71 890784493</a></li>
<li><img src="images/email.png" alt="email"><a>demo@gmail.com</a></li>

</ul>

<div class="last-part">
  <div class="map">
    <img  src="images/map.png" alt="map" width="580px">
    <div >
      <h3>Newsletter</h3>
      <input value="   ENTER YOUR MAIL">
      <button>SUBSCRIBE</button>
    </div>
  </div>
  
  <div class="formulaire">
    
   <form class="form" name="fo" method="post" action="">
    <label>MESSAGE</label>
    <input type="text" id="message" name="message" value="<?php echo $message?>">
    <button type="submit" class="send-btn" name="send" id="send" >SEND</button> 
   </form>
   <div class="left-part">
    <div class="social-media">
         <img src="images/fcb.png" alt="fcb">
         <img src="images/twt.png" alt="twt">
         <img src="images/in.png" alt="in">
         <img src="images/instg.png" alt="istg">
       </div>
     
 </div>
  </div>
</div>

</div>

<div class="copyright">
  <input value="Copyright 2019 All Right Reserved By Free  html Templates">
</div>
</footer>
</section> 

</body>
</html>