<?php
 $dsn = 'mysql:host=localhost;dbname=users;port=3305;charset=utf8';

 // Création et test de la connexion
 
 try {
  
    $pdo = new PDO($dsn, 'root' , '');
   
    }
    catch (PDOException $exception) {
     
     mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
     exit('Erreur de connexion à la base de données');
     
    }
   ?>